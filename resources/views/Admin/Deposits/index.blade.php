@extends('Layouts.master')

@section('title')
    {{ __($page_title) }} | Prologis
@endsection

@section('content')

<div class="page-body">

    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>{{  __($page_title) }}</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">History</li>
              <li class="breadcrumb-item">Deposit</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12 col-md-12 col-12 col-xl-12">
          <div class="card">
            <div class="card-header">
                <div class="row">
                      <div class="col-sm-7 col-md-7 col-xl-10 col-7">
                          <h5>{{ __($page_title) }}</h5> 
                      </div>

                                @if(session()->has('errors'))
                          <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-down"></i>
                              <ul> 
                                  <li> {{ session()->get('errors') }} </li>
                              </ul>
                                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                                
                          @endif
          
                                  @if(session()->has('success'))
                                  <div class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                                    <p> {{ session()->get('success') }} </p>
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                  
                          </div>
                          @endif
                </div>
            </div>

            <div class="card-body">
              <div class="table-responsive text-center">
                <table class="table" id="basic-1">
                  <thead>
                    <tr>
                      
                      <th>Transaction ID</th>
                      <th>Username</th>
                      <th>Method</th>
                      <th>Amount</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse($deposit as $logs)

                        <tr>
                        <td>{{$logs->trx_id}}</td>
                        <td>{{$logs->username}}</td>
                        <td>{{$logs->method}}</td>
                        <td>{{$logs->amount}}</td>
                        <td>{{$logs->created_at}}</td>
                        <td>
                          @if ($logs->status === 'pending')
                          <span class="badge badge-warning rounded-pill badge-sm">{{$logs->status}}</span>
                          @elseif ($logs->status === 'approved')
                          <span class="badge badge-success rounded-pill badge-sm">{{$logs->status}}</span>
                          @else
                          <span class="badge badge-danger rounded-pill badge-sm">{{$logs->status}}</span>
                          @endif
                          
                        </td>
                        <td class="text-center">
                          <div class="btn-group">
                          <a href="{{url('/admin/depositview/'.$logs->id)}}" class="btn btn-pill btn-info btn-sm" title="view"><i class="fa fa-eye"></i></a>
                          &nbsp;
                          <a href="{{url('/admin/rejectdeposit/'.$logs->id)}}" class="btn btn-pill btn-danger btn-sm" title="reject"><i class="fa fa-trash"></i></a>
                        </div></td>
                        </tr>
                        
                      @empty
                          <td class="col" colspan="10"> No Deposit History </td>
                      @endforelse

                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Zero Configuration  Ends-->
      </div>
    
    <!-- Container-fluid Ends-->

</div>
    
@endsection