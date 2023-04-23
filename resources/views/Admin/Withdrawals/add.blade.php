@extends('Layouts.master')

@section('title')
    {{$title}} | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-sm-6 col-lg-8">
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
            <div class="col-sm-6 col-lg-4">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item"> Withdrawal</li>
                <li class="breadcrumb-item active"> {{$title}}</li>
              </ol>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-md-12 col-12">
                <div class="card">
                  <div class="card-header">
                    <h5>{{$title}}</h5>
                  </div>
                  <div class="card-body">
                    @if ($metd == "post")
                    <form class="theme-form" method="post" action="{{url('admin/withdrawals/methods/add')}}" enctype="multipart/form-data">
                    @else
                    <form class="theme-form" method="post" action="{{url('admin/withdrawals/methods/update/'.$id)}}" enctype="multipart/form-data">
                      @method('PUT')
                    @endif
                      @csrf
                        <div class="row">
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      @if ($metd == "post")
                                      <img id="image_preview" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b5eb1a4f5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b5eb1a4f5%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="img-thumbnail">
                                      @else
                                      <img id="image_preview" src="{{asset('/storage/images/'.$method->method_image)}}" alt="..." width="200" height="200" class="img-thumbnail">
                                      @endif
                                      <input class="form-control" id="method_image" name="method_image" type="file" onchange="preview(this.files[0])" accept="image/*" required>
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="method_name">Method Name</label>
                                    @if ($metd == "post")
                                    <input class="form-control" id="method_name" name="method_name" type="text" placeholder="Enter Method Name" required>
                                    @else
                                    <input class="form-control" id="method_name" name="method_name" type="text" placeholder="Enter Method Name" value="{{$method->method_name}}" required>
                                    @endif
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="currency">Currency</label>
                                    @if ($metd == "post")
                                    <input class="form-control" id="currency" name="currency" type="text" placeholder="Currency" required>
                                    @else
                                    <input class="form-control" id="currency" name="currency" type="text" placeholder="Currency" value="{{$method->currency}}" required>
                                    @endif
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                                <div class="mb-3 m-form__group">
                                    <label class="form-label" for="rate">Rate</label>
                                    <div class="input-group"><span class="input-group-text">1 USD =</span>
                                    @if ($metd == "post")
                                    <input class="form-control" id="rate" name="rate" type="number" placeholder="0" required>
                                    @else
                                    <input class="form-control" id="rate" name="rate" type="number" placeholder="0" value="{{$method->rate}}" required>
                                    @endif
                                    </div>
                                </div>
                          </div>
                            <div class="col-sm-12 col-xl-6 col-12">
                                    <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white">Range</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 m-form__group">
                                        <label class="form-label" for="min_amount">Miniumum Amount</label>
                                        <div class="input-group"><span class="input-group-text">USD</span>
                                        @if ($metd == "post")
                                        <input class="form-control" id="min_amount" name="min_amount" type="number" placeholder="0" required>
                                        @else
                                        <input class="form-control" id="min_amount" name="min_amount" type="number" placeholder="0" value="{{$method->min_amount}}" required>
                                        @endif
                                        </div>
                                        </div>
                                        
                                        <div class="mb-3 m-form__group">
                                        <label class="form-label" for="max_amount">Maximum Amount</label>
                                        <div class="input-group"><span class="input-group-text">USD</span>
                                        @if ($metd == "post")
                                        <input class="form-control" id="max_amount" name="max_amount" type="number" placeholder="0" required>
                                        @else
                                        <input class="form-control" id="max_amount" name="max_amount" type="number" placeholder="0" value="{{$method->max_amount}}" required>
                                        @endif
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                             </div>
                             <div class="col-sm-12 col-xl-6 col-12">
                                    <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white">Charge</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 m-form__group">
                                        <label class="form-label" for="fixed_charge">Fixed Charge</label>
                                        <div class="input-group"><span class="input-group-text">USD</span>
                                        @if ($metd == "post")
                                        <input class="form-control" id="fixed_charge" name="fixed_charge" type="number" placeholder="0" required>
                                        @else
                                        <input class="form-control" id="fixed_charge" name="fixed_charge" type="number" placeholder="0" value="{{$method->fixed_charge}}" required>
                                        @endif
                                        </div>
                                        </div>
                                        
                                        <div class="mb-3 m-form__group">
                                        <label class="form-label" for="percent_charge">Percent Charge</label>
                                        <div class="input-group"><span class="input-group-text"><i data-feather="percent"></i></span>
                                        @if ($metd == "post")
                                        <input class="form-control" id="percent_charge" name="percent_charge" type="number" placeholder="0" required>
                                        @else
                                        <input class="form-control" id="percent_charge" name="percent_charge" type="number" placeholder="0" value="{{$method->percent_charge}}" required>
                                        @endif
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                             </div>            
                             <div class="col-sm-12 col-xl-12 col-12">
                                    <div class="card">
                                    <div class="card-header bg-primary">
                                        <h5 class="text-white">Withdrawal Instruction</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                                @if ($metd == "post")
                                                <textarea class="form-control" id="withdraw_instruction" name="withdraw_instruction" rows="10"></textarea>
                                                @else
                                                <textarea class="form-control" id="withdraw_instruction" name="withdraw_instruction" rows="10">{{$method->withdraw_instruction}}</textarea>
                                                @endif
                                            </div>
                                         </div>
                                        
                                    </div>
                                    </div>
                             </div>
 
                      </div>
                      <div class="card-footer text-end">
                        <button class="btn btn-secondary">Cancel</button>
                        @if ($metd == "post")
                        <button type="submit" class="btn btn-primary">Save</button>
                        @else
                        <button type="submit" class="btn btn-primary">Update</button>
                        @endif
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  <script>
      function preview(image){
        document.getElementById('image_preview').src =  URL.createObjectURL(image);
      }
  </script>
@endsection