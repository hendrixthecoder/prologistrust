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
              <li class="breadcrumb-item">Transaction </li>
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
                      <th>Date</th>
                      <th>Transaction ID</th>
                      <th>Username</th>
                      <th>Amount</th>
                      <th>Charge</th>
                      <th>Post Balance</th>
                      <th>Details</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                    @forelse($transaction as $logs)

                          
                    @empty
                        <td class="col" colspan="7"> No Transaction History </td>
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