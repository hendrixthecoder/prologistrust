@extends('Layouts.master')

@section('title')
    New Manual Method | Prologis
@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-6">
              <h3>Add Manual Deposit Method</h3>
            </div>
            <div class="col-6">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                <li class="breadcrumb-item"> Gateway</li>
                <li class="breadcrumb-item active"> Manual</li>
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
                    <h5>Add Manual Method</h5>
                  </div>
                  <div class="card-body">
                    <form class="theme-form" action="POST">
                        <div class="row">
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b5eb1a4f5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b5eb1a4f5%22%3E%3Crect%20width%3D%22200%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2274.421875%22%20y%3D%22104.5%22%3E200x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="..." class="img-thumbnail">
                                      <input class="form-control" id="method_image" type="file" placeholder="Enter method Name" required>
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="method_name">Method Name</label>
                                    <input class="form-control" id="method_name" type="text" placeholder="Enter Method Name" required>
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="currency">Currency</label>
                                    <input class="form-control" id="currency" type="text" placeholder="Currency" required>
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                                <div class="mb-3 m-form__group">
                                    <label class="form-label">Rate</label>
                                    <div class="input-group"><span class="input-group-text">1 USD =</span>
                                    <input class="form-control" type="number" placeholder="0" required>
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
                                        <label class="form-label">Miniumum Amount</label>
                                        <div class="input-group"><span class="input-group-text">USD</span>
                                        <input class="form-control" type="number" placeholder="0" required>
                                        </div>
                                        </div>
                                        
                                        <div class="mb-3 m-form__group">
                                        <label class="form-label">Maximum Amount</label>
                                        <div class="input-group"><span class="input-group-text">USD</span>
                                        <input class="form-control" type="number" placeholder="0" required>
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
                                        <label class="form-label">Fixed Charge</label>
                                        <div class="input-group"><span class="input-group-text">USD</span>
                                        <input class="form-control" type="number" placeholder="0" required>
                                        </div>
                                        </div>
                                        
                                        <div class="mb-3 m-form__group">
                                        <label class="form-label">Percent Charge</label>
                                        <div class="input-group"><span class="input-group-text"><i data-feather="percent"></i></span>
                                        <input class="form-control" type="number" placeholder="0" required>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                             </div>            
                             <div class="col-sm-12 col-xl-12 col-12">
                                    <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h5 class="text-white">Deposit Instuction</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                                <textarea class="form-control" id="method_address" rows="10"></textarea>
                                            </div>
                                         </div>
                                        
                                    </div>
                                    </div>
                             </div>
 
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button class="btn btn-secondary">Cancel</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection