@extends('Layouts.master')

@section('title')
    Trade Settings | Prologis
@endsection

@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Trade Settings</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Settings</li>
                    <li class="breadcrumb-item">Trade Settings</li>
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
                                <h5>Trade Settings</h5> 
                            </div>
                            <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                            <a href="{{url('/admin/settings/trade_settings')}}" class="btn btn-pill btn-primary"> Back </a> 
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
                            <th>TIME</th>
                            <th>UNIT</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($tradesettings as $data)

                          <tr>
                            <td> {{ $data->time }} </td>
                            <td> {{ $data->unit }} </td>
                            <td> {{ $data->created_at }}  </td>
                          
                            <td> 
                              
                              <div class="btn-group btn-group-pill">
                                <a href="#editModalCenter" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-primary btn-sm"> <i class="fa fa-edit"> </i> </a> &nbsp;
                                <a href="#DeleteModal" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i> </a>
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
              <!-- Zero Configuration  Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends-->


          @foreach($tradesettings as $data => $t_setting)
            
        

                        <!-- Edit Trade Settings modal-->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Edit Trade Settings </h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/settings/trade_settings/update/'.$t_setting->id)}}" method="POST">
                                          @method('put')
                                          @csrf
                                                
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                      <label class="form-label">Time</label>
                                                      <div class="input-group">
                                                        <input class="form-control" type="text" placeholder="Enter Time Range" name="trade_time" id="trade_time" value="{{ $t_setting->time }}"> <span class="input-group-text"><i data-feather="clock"></i></span>
                                                      </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="unitselect">Unit</label>
                                                        <select class="form-select digits" id="trade_unit" name="trade_unit">
                                                              <option selected>--Select Time--</option>
                                                              <option>Seconds</option>
                                                              <option>Minutes</option>
                                                              <option>Hours</option>
                                                        </select>
                                                    </div>

                                                    
                                                </div>   

                                                  
                                                
                                                <div class="modal-footer">
                                                  <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                  <button class="btn btn-primary" type="submit">Update</button>
                                                </div>

                                          </form>
                            
                            
                          </div>
                        </div>
                      </div>
                <!-- Trade Settings modal end-->

                <!-- Delete modal end-->
                      <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="Deletemodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Delete this Trade time <span class="text-warning"> {{$t_setting->time}} {{$t_setting->unit}}</h5>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/settings/trade_settings/delete/'.$t_setting->id)}}" method="POST">
                              @csrf
                              <div class="card-body">
                              <div class="text-center">
                                <h6> Are You Sure You Want to Delete <span class="text-warning"> {{$t_setting->time}} {{$t_setting->unit}} </span> From your Trade Settings?</h6>
                              </div>
                              </div>
                            <div class="modal-footer"> 
                              <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">No</button>
                              <button class="btn btn-primary" type="submit">Yes</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>

              @endforeach


</div>

        
 @endsection


 @section('scripts')

 @endsection