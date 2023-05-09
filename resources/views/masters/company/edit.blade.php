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
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Edit Company /</span> Company
  </h4>
  {{debug($errors)}}
  <div class="card mb-4">
    <h5 class="card-header">Company Details</h5>
    <!-- Account -->
    <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img src="{{$company->company_logo}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Upload new logo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
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
      <form method="POST" action="{{ route('companies.update', $company->id) }}">
        @csrf
        @method('PUT')
        <div class="row">
          <input type="hidden" name="id", value="{{$company->id}}">
          <div class="mb-3 col-md-6">
            <label for="name" class="form-label">Company Name</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ $company->name }}" autofocus required/>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="shortName" class="form-label">Short Name</label>
            <input class="form-control @error('short_name') is-invalid @enderror" type="text" name="short_name" id="short_name" value="{{ $company->short_name }}" required/>
            @error('short_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input class="form-control @error('email') is-invalid @enderror" type="text" id="email" name="email" value="{{ $company->email }}" placeholder="john.doe@example.com" />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="domain" class="form-label">Domain</label>
            <input type="text" class="form-control @error('domain') is-invalid @enderror" id="domain" name="domain" value="{{ $company->domain }}" placeholder="example.com" />
            @error('domain')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="company_url" class="form-label">Company URL</label>
            <input type="text" class="form-control @error('company_url') is-invalid @enderror" id="company_url" name="company_url" value="{{ $company->company_url }}" placeholder="www.example.com" />
            @error('company_url')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="phone_number">Phone Number</label>
              <input type="text" id="phone_number" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ $company->phone_number }}"/>
              @error('phone_number')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Address" value="{{ $company->address }}"/>
            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="pune" value="{{ $company->city }}"/>
            @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="state" class="form-label">State</label>
            <input class="form-control @error('state') is-invalid @enderror" type="text" id="state" name="state" placeholder="California" value="{{ $company->state }}"/>
            @error('state')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="zip_code" class="form-label">Zip Code</label>
            <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="zip_code" name="zip_code" placeholder="231465" maxlength="6" value="{{ $company->zip_code }}"/>
            @error('zip_code')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country"  value="{{ $company->country }}"/>
            @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="gstin" class="form-label @error('gstin') is-invalid @enderror">GSTIN</label>
            <input type="text" class="form-control" id="gstin" name="gstin" placeholder="ZAKEPK4545K1ZM" maxlength="14" value="{{ $company->gstin }}"/>
            @error('gstin')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="pan" class="form-label @error('pan') is-invalid @enderror">PAN Number</label>
            <input type="text" class="form-control" id="pan" name="pan" placeholder="AKEPK4545K" maxlength="10" value="{{ $company->pan }}"/>
            @error('pan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
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
