@extends('Layouts.master')

@section('title')
    Edit Gateway
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>Edit Deposit Method</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{url('/gateway/manual')}}">All Methods</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Edit Gateway</h5>
                  </div>
                  @foreach ($gateway as $data)
                  <form class="form theme-form" action="{{url('/admin/gatewayupdate/'.$data->id)}}" enctype="multipart/form-data" method="POST">
                  {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                    
                    <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="gatewayname">Gateway Name</label>
                                    <input class="form-control" name="gatewayname" id="gatewayname" type="text" placeholder="" value="{{$data->name}}" required>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="minimum">Minimum Deposit</label>
                                    <input class="form-control" name="minimum" id="minimum" type="number" placeholder="" value="{{$data->minimum}}">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="maximum">Maximum Deposit</label>
                                    <input class="form-control" name="maximum" id="maximum" type="number" placeholder="" value="{{$data->maximum}}">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div>
                                    <label class="form-label" for="instruction">Instruction</label>
                                    <textarea name="instruction" class="form-control" id="instruction" rows="2">{{$data->instruction}}</textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="mb-3">
                                    <label class="form-label" for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                      <option value="active" selected>Active</option>
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
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Submit</button>
                      <input class="btn btn-light" type="reset" value="Cancel">
                    </div>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection