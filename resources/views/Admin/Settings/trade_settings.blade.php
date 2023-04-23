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
                            <a href="#exampleModalCenter" class="btn btn-pill btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> Add New </a> 
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
                            <th>Time</th>
                            <th>Unit</th>
                            <th>Created at</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @forelse($tradesettings as $data)

                          <tr>
                            <td> {{ $data->time }} </td>
                            <td> {{ $data->unit }} </td>
                            <td> {{ $data->created_at }}  </td>
                          
                            <td> 
                              
                        
                                <a href="{{url('/admin/settings/trade_settings/edit/'.$data->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-desktop"> </i> </a>
                  
                            </td>

                          </tr>

                          @empty
                                <td class="col" colspan="4"> No Trade Settings Available </td>
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

          <!-- Trade Settings modal-->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Add Trade Settings</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                           <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/settings/trade_settings/create')}}" method="POST">
                              @csrf

                          <div class="modal-body">
                           
                                  <div class="mb-3">
                                    <label class="form-label">Time</label>
                                    <div class="input-group">
                                      <input class="form-control" type="text" placeholder="Enter Time Range" name="trade_time" id="trade_time"> <span class="input-group-text"><i data-feather="clock"></i></span>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                      <label class="form-label" for="unitselect">Unit</label>
                                      <select class="form-select digits" id="trade_unit" name="trade_unit">
                                            <option selected>--Select Unit--</option>
                                            <option>Seconds</option>
                                            <option>Minutes</option>
                                            <option>Hours</option>
                                      </select>
                                  </div>
                                
                          </div>

                          <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Save</button>
                          </div>

                          </form>

                        </div>
                      </div>
                    </div>



</div>

        
 @endsection


 @section('scripts')

 @endsection