@extends('Layouts.master')

@section('title')
    Edit Crypto Currency | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Edit Crypto Currency</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Settings</li>
              <li class="breadcrumb-item">Edit Crypto Currency</li>
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
                        @foreach($cryptocurrencies as $c_id)
                        
                          <h5>Edit {{ $c_id->name }} </h5> 

                        @endforeach
                      </div>
                      <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                           <a href="{{ url('/admin/settings/crypto_list') }}" class="btn btn-pill btn-primary"> Back </a>
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
                      <th>Image</td>
                      <th>Name</th>
                      <th>Coin Symbol</th>
                      <th>Created date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  
                  <tbody>
                    @foreach($cryptocurrencies as $data)
                    <tr> 
                      
                       <td> 
                          <div class="media text-center">
                            <img src="{{asset('/storage/images/'.$data->image)}}" class="img-50 rounded-circle  mx-auto d-block" alt="currency Image">
                          </div>
                        </td>

                        <td> {{ $data->name }} </td>
                      
                      <td> {{ $data->symbol }} </td>

                      <td> {{ $data->created_at }} </td>

                      <td> {{ $data->status }} </td>

                     

                      <td>
                        <div class="btn-group btn-group-pill">
                        <a href="#editModalCenter" data-bs-toggle="modal" data-bs-target="#editModalCenter" class="btn btn-primary btn-sm"> <i class="fa fa-edit"> </i> </a> &nbsp;
                       
                        <a href="#eDeleteModalCenter" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn btn-danger btn-sm"> <i class="fa fa-trash"> </i> </a>
                        
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

            @foreach($cryptocurrencies as $cryptrency)

                      <!-- Edit Trade Settings modal-->
                  <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title">Edit Crypto Currency</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/settings/crypto_list/update/'.$data->id)}}" method="POST">
                                        @method('put')
                                        @csrf
                                        
                                        
                                          
                                      
                              <div class="modal-body">

                                  <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <div class="input-group">
                                      <input class="form-control" type="text" placeholder="Enter Currency Name" id="currency_name" name="currency_name" value="{{ $cryptrency->name }}">
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Coin Symbol</label>
                                    <div class="input-group">
                                      <input class="form-control" id="coin_symbol" type="text" placeholder="BTC" name="coin_symbol" value="{{ $cryptrency->symbol }}">
                                    </div>
                                  </div>
                                  
                                  <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option selected>--Select Unit--</option>
                                        <option value="active"> Active </option>
                                        <option value="disabled"> Disabled </option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <div class="input-group">
                                      <input class="form-control" id="image" type="file" placeholder="Currency Image" name="image" value="{{ $cryptrency->image}}">
                                    </div>
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
                            <h5 class="modal-title">Delete <span class="text-warning"> {{$cryptrency->name}} </span> </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/settings/crypto_list/delete/'.$cryptrency->id)}}" method="POST">
                            @csrf
                            <div class="card-body">
                            <div class="text-center">
                              <h6> Are You Sure You Want to Delete <span class="text-warning"> {{$cryptrency->name}} </span> From your Cryptocurrency List?</h6>
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