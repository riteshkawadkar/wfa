@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Company - WFA')


@section('vendor-style')

@endsection

@section('vendor-script')

@endsection

<!-- Page -->
@section('page-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-profile.css')}}" />
@endsection

@section('page-script')

@endsection

@section('content')
  @if(!$company)
    <h4>Company</h4>
    <p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation') : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>

    <div class="card text-center">
      <div class="card-header">
        Company Details
      </div>

        <div class="card-body">
          <h5 class="card-title">Register New Company</h5>
          <p class="card-text">Register new company to use Workflow Automation</p>
          <a href="{{route("companies.create")}}" class="btn btn-primary">Register Now</a>
        </div>
    <div class="card-footer text-muted">
      <p><a href="{{ config('variables.documentation') ? config('variables.documentation') : '#' }}" target="_blank" rel="noopener noreferrer">Terms and Conditions</a>.</p>
    </div>
  </div>
  @else
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Company Profile /</span> Profile
    </h4>

    <!-- Header -->
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="user-profile-header-banner">
            <img src="{{asset('assets/img/pages/profile-banner.png')}}" alt="Banner image" class="rounded-top">
          </div>
          <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
              <img src="{{$company->company_logo}}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-5">
              <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                  <h4>{{$company->name}}</h4>
                  <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-map'></i> {{$company->address}}
                    </li>
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-calendar-alt'></i> Joined {{$company->created_at->format('M Y')}}
                    </li>
                  </ul>
                </div>
                <div>
                  <a href="{{$company->company_url}}" class="btn btn-primary text-nowrap">
                    <i class='bx bx-link-external me-1'></i> Visit Website
                  </a>
                  <a href="{{route('companies.edit', ['company' => $company->id])}}" class="btn btn-label-primary text-nowrap">
                    <i class='bx bx-edit me-1'></i> Edit
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Header -->

    <!-- Navbar pills -->
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-sm-row mb-4">
          <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-user me-1'></i> Details</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('pages/profile-teams')}}"><i class='bx bx-group me-1'></i> Roles</a></li>
          </ul>
      </div>
    </div>
    <!--/ Navbar pills -->
    <!-- User Profile Content -->
    <div class="row">
      <div class="col-xl-4 col-lg-5 col-md-5">
        <!-- About Company -->
        <div class="card mb-4">
          <div class="card-body">
            <small class="text-muted text-uppercase">About</small>
            <ul class="list-unstyled mb-4 mt-3">
              <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Name:</span> <span>{{$company->name}}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>{{($company->status==1)?'Active':'Inactive'}}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">City:</span> <span>{{$company->city}}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span>{{$company->country}}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span class="fw-semibold mx-2">Languages:</span> <span>English</span></li>
            </ul>
            <small class="text-muted text-uppercase">Contacts</small>
            <ul class="list-unstyled mb-4 mt-3">
              <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span> <span>{{$company->phone_number}}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>{{$company->email}}</span></li>
            </ul>
            <small class="text-muted text-uppercase">Teams</small>
            <ul class="list-unstyled mt-3 mb-0">
              <li class="d-flex align-items-center mb-3"><i class="bx bxl-github text-primary me-2"></i>
                <div class="d-flex flex-wrap"><span class="fw-semibold me-2">Backend Developer</span><span>(126 Members)</span></div>
              </li>
              <li class="d-flex align-items-center"><i class="bx bxl-react text-info me-2"></i>
                <div class="d-flex flex-wrap"><span class="fw-semibold me-2">React Developer</span><span>(98 Members)</span></div>
              </li>
            </ul>
          </div>
        </div>
        <!--/ About Company -->
      </div>
      <div class="col-xl-8 col-lg-7 col-md-7">

        <div class="row">
          <!-- Overview -->
          <div class="col-lg-12 col-xl-6">
            <div class="card mb-4">
              <div class="card-body">
                <small class="text-muted text-uppercase">Overview</small>
                <ul class="list-unstyled mt-3 mb-0">
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">Domain:</span> <span>{{$company->domain}}</span></li>
                  <li class="d-flex align-items-center mb-3"><i class='bx bx-customize'></i><span class="fw-semibold mx-2">Short Name:</span> <span>{{$company->short_name}}</span></li>
                </ul>
                <small class="text-muted text-uppercase">Tax Details</small>
                <ul class="list-unstyled mt-3 mb-0">
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">GST:</span> <span>{{$company->gstin}}</span></li>
                  <li class="d-flex align-items-center mb-3"><i class='bx bx-customize'></i><span class="fw-semibold mx-2">PAN:</span> <span>{{$company->pan}}</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Overview -->
          <!-- Roles -->
          <!-- TODO: Add Roles in Company profile -->
          <div class="col-lg-12 col-xl-6">
            <div class="card card-action mb-4">
              <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Roles</h5>
                <div class="card-action-element">
                  <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mb-0">
                  <li class="mb-3">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-start">
                        <div class="avatar me-3">
                          <img src="{{asset('assets/img/icons/brands/react-label.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="me-2">
                          <h6 class="mb-0">React Developers</h6>
                          <small class="text-muted">72 Members</small>
                        </div>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                      </div>
                    </div>
                  </li>
                  <li class="mb-3">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-start">
                        <div class="avatar me-3">
                          <img src="{{asset('assets/img/icons/brands/support-label.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="me-2">
                          <h6 class="mb-0">Support Team</h6>
                          <small class="text-muted">122 Members</small>
                        </div>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:;"><span class="badge bg-label-primary">Support</span></a>
                      </div>
                    </div>
                  </li>
                  <li class="mb-3">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-start">
                        <div class="avatar me-3">
                          <img src="{{asset('assets/img/icons/brands/figma-label.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="me-2">
                          <h6 class="mb-0">UI Designers</h6>
                          <small class="text-muted">7 Members</small>
                        </div>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:;"><span class="badge bg-label-info">Designer</span></a>
                      </div>
                    </div>
                  </li>
                  <li class="mb-3">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-start">
                        <div class="avatar me-3">
                          <img src="{{asset('assets/img/icons/brands/vue-label.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="me-2">
                          <h6 class="mb-0">Vue.js Developers</h6>
                          <small class="text-muted">289 Members</small>
                        </div>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                      </div>
                    </div>
                  </li>
                  <li class="mb-3">
                    <div class="d-flex align-items-center">
                      <div class="d-flex align-items-start">
                        <div class="avatar me-3">
                          <img src="{{asset('assets/img/icons/brands/twitter-label.png')}}" alt="Avatar" class="rounded-circle" />
                        </div>
                        <div class="me-w">
                          <h6 class="mb-0">Digital Marketing</h6>
                          <small class="text-muted">24 Members</small>
                        </div>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:;"><span class="badge bg-label-secondary">Marketing</span></a>
                      </div>
                    </div>
                  </li>
                  <li class="text-center">
                    <a href="javascript:;">View all teams</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ Roles -->
        </div>
        <!-- Workflows table -->
        <!-- TODO: Add Workflows in Company profile -->
        <div class="card mb-4">
          <div class="card-datatable table-responsive">
            <table class="datatables-projects border-top table">
              <thead>
              <tr>
                <th></th>
                <th></th>
                <th>Name</th>
                <th>Description</th>
                <th>Created By</th>
                <th class="w-px-200">Status</th>
                <th>Action</th>
              </tr>
              </thead>
            </table>
          </div>
        </div>
        <!--/ Workflows table -->
      </div>
    </div>
    <!--/ User Profile Content -->

    <div class="card">
      <h5 class="card-header">Delete Account</h5>
      <div class="card-body">
        <div class="mb-3 col-12 mb-0">
          <div class="alert alert-warning">
            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
          </div>
        </div>
        <form method="POST" action="{{ route('companies.destroy', $company->id) }}">
          @csrf
          @method('DELETE')
          <input type="hidden" name="id" value="{{ $company->id }}">
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
          <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
          <input type="hidden">
        </form>
      </div>
    </div>
  @endif
@endsection
