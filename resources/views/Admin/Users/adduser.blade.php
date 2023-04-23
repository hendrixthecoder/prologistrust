@extends('Layouts.master')

@section('title')
    Add users | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-sm-6 col-lg-8">
              @if (session()->has('success'))
                    <div class="alert alert-primary dark alert-dismissible fade show outline" role="alert"><strong>{{ session()->get('success') }}</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session()->has('errors'))
                    <div class="alert alert-secondary dark alert-dismissible fade show outline" role="alert"><strong>{{ session()->get('errors') }}</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            <div class="col-sm-6 col-lg-4">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item"> Users</li>
                <li class="breadcrumb-item active"> Add user</li>
              </ol>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Enter details below</h5>
                  </div>
                  <div class="card-body">
                    <form class="theme-form" method="post" enctype="multipart/form-data" action="{{url('/admin/user/adduser')}}">
                      @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="firstname">Firstname</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="firstname" name="firstname" type="text" placeholder="John Doe">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label" for="lastname">Lastname</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="lastname" name="lastname" type="text" placeholder="John Doe">
                            </div>
                          </div>
                      <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="email">Email</label>
                        <div class="col-sm-9">
                          <input class="form-control" id="email" name="email" type="email" placeholder="Johndoe@email.com">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="username">Username</label>
                        <div class="col-sm-9">
                          <input class="form-control" id="username" name="username" type="text" placeholder="Johndoe23">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="phone">Phone number</label>
                        <div class="col-sm-9">
                          <input class="form-control" id="phone" name="phone" type="text" placeholder="+12344740000">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="country">Country</label>
                        <div class="col-sm-9">
                          <select class="form-control" id="country" name="country">
                              @foreach ($countries as $country)
                                  <option value="{{$country}}">{{$country}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="password">Password</label>
                        <div class="col-sm-9">
                          <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label" for="confirmpass">Confirm password</label>
                        <div class="col-sm-9">
                          <input class="form-control" id="confirmpass" name="confirmpass" type="password" placeholder="Confirm password">
                        </div>
                      </div>
                      <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection