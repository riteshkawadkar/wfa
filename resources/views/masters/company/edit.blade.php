@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')
@section('title', 'Company - WFA')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
  <script>
    function previewImage(event) {
      var input = event.target;
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          var preview = document.getElementById('preview');
          preview.src = e.target.result;
          preview.style.display = "block";
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Company /</span> Company
  </h4>
  {{debug($errors)}}
  <div class="card mb-4">
    <h5 class="card-header">Company Details</h5>
    <!-- Account -->
    <form method="POST" action="{{ route('companies.update', $company->id) }}">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100"
               width="100" id="preview"/>
          <div class="button-wrapper">
            <label for="company_logo" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new logo</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
            </label>
            <input type="file" name="company_logo" id="company_logo" class="account-file-input" accept="image/png,
            image/jpeg" onchange="previewImage(event)" hidden>

            <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
          </div>
        </div>
      </div>
      <hr class="my-0">
      <div class="card-body">
          <div class="row">
            <input type="hidden" name="id", value="{{$company->id}}">
            <x-company-input-field label="Company Name" name="name" value="{{ $company->name }}" placeholder="Company Name" required autofocus />
            <x-company-input-field label="Short Name" name="short_name" value="{{ $company->short_name }}" placeholder="Short Name" required />
            <x-company-input-field label="Email" name="email" value="{{ $company->email }}" placeholder="john.doe@example.com" required />
            <x-company-input-field label="Domain Name" name="domain" value="{{ $company->domain }}" placeholder="example.com" required />
            <x-company-input-field label="Company URL" name="company_url" value="{{ $company->company_url }}" placeholder="https://origamiitlab.com/" required />
            <x-company-input-field label="Phone Number" name="phone_number" value="{{ $company->phone_number }}" placeholder="202 555 0111" />
            <x-company-input-field label="Address" name="address" value="{{ $company->address }}" required />
            <x-company-input-field label="City" name="city" value="{{ $company->city }}" />
            <x-company-input-field label="State" name="state" value="{{ $company->state }}" />
            <x-company-input-field label="Zip Code" name="zip_code" value="{{ $company->zip_code }}" required />
            <x-company-input-field label="Country" name="country" value="{{ $company->country }}" required />
            <x-company-input-field label="GSTIN" name="gstin" value="{{ $company->gstin }}" placeholder="ZAKEPK4545K1ZM" maxlength="14" />
            <x-company-input-field label="PAN" name="pan" value="{{ $company->pan }}" placeholder="AKEPK4545K" maxlength="10" />
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-label-secondary">Cancel</button>
          </div>

      </div>
    </form>
    <!-- /Account -->
  </div>
@endsection
