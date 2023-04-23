@extends('Layouts.master')

@section('title')
    View Withdrawal Request
@endsection

@section('content')
<div class="page-body">

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>View Withdrawal</h3>
      </div>
      <div class="col-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
          <li class="breadcrumb-item">Withdrawal</li>
          <li class="breadcrumb-item">View</li>
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
        <div class="row">

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
        <div class="card-body">
        <div class="col-xl-12 col-md-12 box-col-12">
                  <div class="email-right-aside bookmark-tabcontent content-center">
                    <div class="card email-body radius-left">
                      <div class="ps-0">
                        <div class="tab-content">
                          <div class="tab-pane fade active show" id="pills-created" role="tabpanel" aria-labelledby="pills-created-tab">
                            <div class="card mb-0">
                              <div class="card-body p-0">
                                <div class="taskadd">
                                  <div class="table-responsive">
                                    <table class="table">
                                    @foreach ($withdraw as $data)
                                        <tr>
                                        <td>
                                          <h6 class="task_title_0">Full Name</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->username}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <h6 class="task_title_0">Amount</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->amount}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <h6 class="task_title_0">Transaction hash</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->trx_id}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <h6 class="task_title_0">Wallet Address</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->wallet_address}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <h6 class="task_title_0">Column</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->payable}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <h6 class="task_title_0">Status</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->status}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <h6 class="task_title_0">Note</h6>
                                          
                                        </td>
                                        <td>
                                          <p class="task_desc_0">{{$data->note}}</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" class="text-center">
                                            <div class="btn-group">
                                                <a href="{{url('admin/approvewithdraw/'.$data->id)}}" class="btn btn-pill btn-sm btn-info" title="approve"><i class="fa fa-check"></i></a>
                                                &nbsp;
                                                <a href="{{url('admin/rejectwithdraw/'.$data->id)}}" class="btn btn-pill btn-sm btn-danger" title="reject"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                        
                                      </tr>
                                    @endforeach
                                      
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
        </div>
      </div>
    </div>
    <!-- Zero Configuration  Ends-->
  </div>

<!-- Container-fluid Ends-->

</div>
@endsection