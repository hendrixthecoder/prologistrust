@extends('Layouts.master')

@section('title')
    Users | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-8">
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
          <div class="col-8">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Users</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
     
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>{{$title}}</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive text-center">
            <table class="display" id="basic-2">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Date Registered</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{url('/admin/user/show/'.$user->id)}}" class="btn btn-primary btn-block btn-sm text-light" data-bs-toggle="tooltip" data-bs-placement="top" title="View user"><i class="fa fa-eye"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
              </tbody> 
            </table>
          </div>
        </div>
      </div>
    </div>

    
    



  </div>
    
     
@endsection

@section('scripts')

@endsection