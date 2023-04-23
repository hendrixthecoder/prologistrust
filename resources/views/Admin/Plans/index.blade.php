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
              <li class="breadcrumb-item">Investment</li>
              <li class="breadcrumb-item">Plans</li>
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
                        <div class="col-sm-5 col-md-5 col-xl-2 col-5">
                            <a href="#exampleModalCenter" class="btn btn-pill btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Add New</a>
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
                      <th>Name</th>
                      <th>Min</th>
                      <th>Max</th>
                      <th>Duration</th>
                      <th>ROI</th>
                      <th>Created At </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @forelse($plans as $logs)
                        <tr>
                            <td class="col"> {{ $logs->name }} </td>
                            <td class="col">$ {{ $logs->min }} </td>
                            <td class="col">$ {{ $logs->max }} </td>
                            <td class="col"> {{ $logs->duration }} </td>
                            <td class="col">$ {{ $logs->roi }}  </td>
                            <td class="col"> {{ $logs->created_at }} </td>
                            <td class="col">
                                    <a href="{{url('/admin/plans/edit/'.$logs->id)}}" class="btn btn-pill btn-primary"><i class="fa fa-desktop"></i></a>
                            </td>
                        </tr>
                          
                      @empty
                          <td class="col" colspan="5"> {{ __($empty_message) }} </td>
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

<!-- Plan Settings modal-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title">Add Investment Plan </h5>
                     <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <form class="form theme-form" enctype="multipart/form-data" action="{{url('/admin/plans/create')}}" method="POST">
                      @csrf
                     
                       <div class="modal-body">
             
                           <div class="mb-3">
                             <label class="form-label">Plan Name</label>
                             <div class="input-group">
                               <input class="form-control" type="text" placeholder="Enter Plan Name" id="name" name="name">
                             </div>
                           </div>

                           <div class="mb-3">
                             <label class="form-label">Min</label>
                             <div class="input-group">
                               <input class="form-control" id="min" type="text" placeholder="0.00" name="min"><span class="input-group-text">USD</span>
                             </div>
                           </div>

                           <div class="mb-3">
                             <label class="form-label">Max</label>
                             <div class="input-group">
                               <input class="form-control" id="max" type="text" placeholder="0.00" name="max"><span class="input-group-text">USD</span>
                             </div>
                           </div>
                           
                           <div class="mb-3">
                             <label class="form-label" for="duration">Duration</label>
                             <select class="form-control" id="duration" name="duration">
                                 <option selected > --Select Duration-- </option>
                                 <option> Daily </option>
                                 <option> Weekly </option>
                                 <option> 4 Months </option>
                             </select>
                           </div>

                           <div class="mb-3">
                             <label class="form-label">ROI</label>
                             <div class="input-group">
                               <input class="form-control" id="roi" type="text" placeholder="0.00" name="roi"><span class="input-group-text">USD</span>
                             </div>
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
   <!-- Plan Settings modal end-->

    
@endsection