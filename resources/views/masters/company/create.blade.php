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
        <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
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
      <form method="POST" action="{{ route('companies.store') }}">
        @csrf
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="name" class="form-label">Company Name</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" autofocus required/>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="shortName" class="form-label">Short Name</label>
            <input class="form-control @error('short_name') is-invalid @enderror" type="text" name="short_name" id="short_name" value="{{ old('short_name') }}" required/>
            @error('short_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}" placeholder="john.doe@example.com" />
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="domain" class="form-label">Domain</label>
            <input type="text" class="form-control" id="domain" name="domain" value="{{ old('domain') }}" placeholder="example.com" />
            @error('domain')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="company_url" class="form-label">Company URL</label>
            <input type="text" class="form-control" id="company_url" name="company_url" value="{{ old('company_url') }}" placeholder="www.example.com" />
            @error('company_url')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="phone_number">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="202 555 0111" value="{{ old('phone_number') }}"/>
              @error('phone_number')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ old('address') }}"/>
            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="pune" value="{{ old('city') }}"/>
            @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="state" class="form-label">State</label>
            <input class="form-control" type="text" id="state" name="state" placeholder="California" value="{{ old('state') }}"/>
            @error('state')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="zip_code" class="form-label">Zip Code</label>
            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="231465" maxlength="6" value="{{ old('zip_code') }}"/>
            @error('zip_code')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country"  value="{{ old('country') }}"/>
            @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="gstin" class="form-label">GSTIN</label>
            <input type="text" class="form-control" id="gstin" name="gstin" placeholder="ZAKEPK4545K1ZM" maxlength="14" value="{{ old('gstin') }}"/>
            @error('gstin')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3 col-md-6">
            <label for="pan" class="form-label">PAN Number</label>
            <input type="text" class="form-control" id="pan" name="pan" placeholder="AKEPK4545K" maxlength="10" value="{{ old('pan') }}"/>
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
