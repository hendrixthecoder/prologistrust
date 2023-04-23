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
              <li class="breadcrumb-item">Withdrawal</li>
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
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Transaction ID</th>
                      <th>Username</th>
                      <th>Method</th>
                      <th>Amount</th>
                      <th>Date</th>
                      <td>Status</td>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse($withdrawal as $logs)
                      <tr>
                      <td>{{$logs->id}}</td>
                      <td>{{$logs->trx_id}}</td>
                      <td>{{$logs->username}}</td>
                      <td>{{$logs->method}}</td>
                      <td>{{$logs->amount}}</td>
                      <td>{{$logs->created_at}}</td> 
                      <td>
                        @if ($logs->status === 'pending')
                        <span class="badge rounded-pill badge-warning">{{$logs->status}}</span>
                        @elseif ($logs->status === 'approved')
                        <span class="badge rounded-pill badge-success">{{$logs->status}}</span>
                        @else
                        <span class="badge rounded-pill badge-danger">{{$logs->status}}</span>
                        @endif
                        
                      </td>
                      <td>
                          
                            <a href="{{url('/admin/viewwithdraw/'.$logs->id)}}" class="btn btn-pill btn-secondary btn-sm" title="view"><i class="fa fa-eye"></i></a>
                          
                      </td>
                    </tr>
                      @empty
                          <td class="col" colspan="10"> No Withdraw History </td>
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