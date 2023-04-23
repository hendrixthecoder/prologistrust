@extends('Layouts.master')

@section('title')
    Logo & Icon Settings | Prologis
@endsection

@section('content')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Logo & Icon Settings</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">   <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item active">Logo & Icon Settings</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Logo</h5>
                  </div>
                  <div class="card-body text-center">
                        <img src="{{asset('dashboard/assets/images/logo/logo_dark.png')}}" class="rounded" alt="logo">
                  </div>
                  <div class="card-footer text-center">
                        <form class="form theme-form">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12">
                                <div class="mb-3">
                                    <label class="form-label"><i data-feather="upload"></i> Upload Logo</label> <br>
                                    <input class="custom-file-input btn btn-outline-primary" type="file" id="logo" name="logo">
                                </div>
                                </div>
                            </div>
                            </div>
                        </form>
                </div>
                </div>
              </div>

             
              <div class="col-sm-12 col-xl-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Fav Icon</h5>
                  </div>
                  <div class="card-body text-center">
                        <img src="{{asset('dashboard/assets/images/logo/logo-icon.png')}}" class="rounded" alt="fav_icon">
                  </div>
                <div class="card-footer text-center">
                <form class="form theme-form">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-12">
                          <div class="mb-3">
                            <label class="form-label"><i data-feather="upload"></i> Upload Fav Icon</label> <br>
                              <input class="custom-file-input btn btn-outline-secondary" type="file" id="favicon" name="favicon">
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
                </div>
                </div>
              </div>
           
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
@endsection

@section('scripts')
    
@endsection