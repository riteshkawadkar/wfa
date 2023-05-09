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
  <script src="{{asset('assets/js/masters/company.js')}}"></script>
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Create Company /</span> Company
  </h4>
  {{debug($errors)}}
  <div class="card mb-4">
    <h5 class="card-header">Company Details</h5>
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100"
             width="100" id="uploadedAvatar"/>
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Upload new logo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg"/>
          </label>
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
      <form method="POST" action="{{ route('companies.store') }}">
        @csrf
        <div class="row">
          <x-company-input-field label="Company Name" name="name" value="{{ old('name') }}" placeholder="Company Name" required
                         autofocus/>
          <x-company-input-field label="Short Name" name="short_name" value="{{ old('short_name') }}" placeholder="Short Name"
                         required/>
          <x-company-input-field label="Email" name="email" value="{{ old('email') }}" placeholder="john.doe@example.com"
                         required/>
          <x-company-input-field label="Domain Name" name="domain" value="{{ old('domain') }}" placeholder="example.com"
                         required/>
          <x-company-input-field label="Company URL" name="company_url" value="{{ old('company_url') }}"
                         placeholder="https://origamiitlab.com/" required/>
          <x-company-input-field label="Phone Number" name="phone_number" value="{{ old('phone_number') }}"
                         placeholder="202 555 0111"/>
          <x-company-input-field label="Address" name="address" value="{{ old('address') }}" required/>
          <x-company-input-field label="City" name="city" value="{{ old('city') }}"/>
          <x-company-input-field label="State" name="state" value="{{ old('state') }}"/>
          <x-company-input-field label="Zip Code" name="zip_code" value="{{ old('zip_code') }}" required/>
          <x-company-input-field label="Country" name="country" value="{{ old('country') }}" required/>
          <x-company-input-field label="GSTIN" name="gstin" value="{{ old('gstin') }}" placeholder="ZAKEPK4545K1ZM"
                         maxlength="14"/>
          <x-company-input-field label="PAN" name="pan" value="{{ old('pan') }}" placeholder="AKEPK4545K" maxlength="10"/>
        </div>
        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /Account -->
  </div>
@endsection
