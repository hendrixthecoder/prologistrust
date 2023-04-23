@extends('Layouts.master')

@section('title')
    Manual Deposit Methods | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Manual Deposit Methods</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Manual Methods</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
     <!-- Ajax data source array start-->
    <div class="col-sm-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
                <div class="col-sm-7 col-md-7 col-xl-10 col-7">
                    <h5>All Methods</h5> 
                </div>
                <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                <button class="btn btn-pill btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#AddModal"> Add New</button> 
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
            @foreach ($gateway as $data)
              
                
                <div class="card col-xl-4 ">
                  <div class="card-header bg-primary text-center">
                    <h6 class="text-white">{{$data->name}}</h6>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('/storage/images/'.$data->image)}}" class="rounded" alt="gateway Image">
                  </div>
                  &nbsp;
                    <h6>Min Amount: ${{$data->minimum}}</h6>
                    <h6>Max Amount:  ${{$data->maximum}}</h6>
                    <h6>Status: {{$data->status}}</h6>
                    <h6>Instruction: {{$data->instruction}}</h6>
                  </div>
                  <div class="card-footer text-center">
                    <a href="{{url('/admin/gatewayedit/'.$data->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                  </div>
                </div>

                <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="Deletemodal" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/gatewaydelete/'.$data->id)}}" method="POST">
                            @csrf
                            <div class="card-body">
                             <div class="text-center">
                              <h6> Are You Sure You Want to Delete {{$data->name}} Gateway?</h6>
                             </div>
                            </div>
                          <div class="modal-footer"> 
                            <button class="btn btn-primary" type="submit">Yes</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">No</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
              
            
            @endforeach
            </div>
        </div>
      </div>
       <!-- Ajax data source array end-->

       <!-- Vertically centered modal-->
       
                    <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="Addmodal" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Add New Gateway</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/gatewayadd')}}" method="POST">
                            @csrf
                            <div class="card-body">
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="gatewayname">Gateway Name</label>
                                    <input class="form-control" name="gatewayname" id="gatewayname" type="text" placeholder="Enter Gateway Name" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="minimum">Minimum Deposit</label>
                                    <input class="form-control" name="minimum" id="minimum" type="number" placeholder="Enter Minimum Amount">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="maximum">Maximum Deposit</label>
                                    <input class="form-control" name="maximum" id="maximum" type="number" placeholder="Enter Maximum Amount">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div>
                                    <label class="form-label" for="instruction">Instruction</label>
                                    <textarea name="instruction" class="form-control" id="instruction" rows="2"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                      <option value="active">Active</option>
                                      <option value="disabled">Disabled</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div>
                                    <label class="form-label" for="instruction">Upload Gateway Image</label>
                                    <input class="form-control" type="file" name="image" id="image" required>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                          </div>
                          <div class="modal-footer"> 
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
    
@endsection

@section('scripts')
    
@endsection