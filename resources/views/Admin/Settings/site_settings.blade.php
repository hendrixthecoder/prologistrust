@extends('Layouts.master')

@section('title')
    Site Settings | Prologis
@endsection

@section('content')
<div class="page-body">

          <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h3>Site Settings</h3>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                      <li class="breadcrumb-item"> Settings</li>
                      <li class="breadcrumb-item active"> Site Settings</li>
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
                    <h5> Site Details</h5>
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
                    
                  @endif

                 
                 
                  @foreach($sitesettings as $data)
                    
                  <form class="theme-form" enctype="multipart/form-data" action="{{url('/admin/settings/site_settings/update/'.$data->id)}}" method="POST">
                   @method('put')
                    @csrf

                    <div class="card-body">
                    
                        <div class="row">
                            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                                <div class="mb-3 row">
                                    <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                        <label class="form-label" for="site_name">Site Name</label>
                                      <input class="form-control" id="site_name" name="site_name" type="text" value="{{ $data->site_name }}" placeholder="Enter Site Name" required>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                                <div class="mb-3 row">
                                    <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                        <label class="form-label" for="site_description">Site Description</label>
                                        <input type="text" class="form-control" id="site_description" value="{{ $data->site_description }}" name="site_description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                    <label class="form-label" for="currency">Currency</label>
                                    <input class="form-control" id="currency" value="{{ $data->currency }}" name="currency" type="text" placeholder="Enter Site Currency" required>
                                  </div>
                              </div>
                          </div> 
                            <div class="col-xl-2 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="currency_symbol">Currency Symbol</label>
                                    <input class="form-control" id="currency_symbol" value="{{ $data->currency_symbol }}" name="currency_symbol" type="text" placeholder="$">
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                              <div class="mb-3 row">
                                <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                  <label class="form-label" for="user_register">User Registration</label>
                                  <select class="form-control text-info" id="user_registration" name="user_registration">
                                    <option selected> {{ $data->user_registration }} </option>
                                    <option> Enabled </option>
                                    <option> Disabled </option>

                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                              <div class="mb-3 row">
                                <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                  <label class="form-label" for="email_verify">Email Verification</label>
                                  <select class="form-control text-info" id="email_verification" name="email_verification">
                                    <option selected> {{ $data->email_verification }} </option>
                                    <option> Enabled </option>
                                    <option> Disabled </option>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                              <div class="mb-3 row">
                                <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                  <label class="form-label" for="referral_status">Referral Status</label>
                                  <select class="form-control text-info" id="referral_status" name="referral_status">
                                    <option selected> {{ $data->referral_status }} </option>
                                    <option> Enabled </option>
                                    <option> Disabled </option>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="site_email">Email</label>
                                      <input class="form-control" id="site_email" value="{{ $data->site_email }}" name="site_email" type="email" placeholder="name@example.com">
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="site_phone">Phone</label>
                                      <input class="form-control m-input digits" name="site_phone" value="{{ $data->site_phone }}" id="site_phone" type="text" placeholder="91-(999)-999-999">
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                  <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                      <label class="form-label" for="site_address">Address</label>
                                      <input type="text" class="form-control" id="site_address" name="site_address"  value="{{ $data->site_address }}">
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-2 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                    <label class="form-label">Primary Colour</label>
                                    <div class="input-group">
                                      <input class="form-control" type="text"  value="{{ $data->primary_colour }}" id="primary_colour" name="primary_colour">
                                    </div>
                              </div>
                          </div> 
                          <div class="col-xl-2 col-md-12 col-sm-12 col-12">
                              <div class="mb-3 row">
                                    <label class="form-label">Secondary Colour</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" id="secondary_colour" name="secondary_colour" value="{{ $data->secondary_colour }}">
                                    </div>
                              </div>
                          </div> 
                          <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                              <div class="mb-3">
                                  <label class="form-label">Demo Balance</label>
                                  <div class="input-group">
                                    <input class="form-control" value="{{ $data->demo_balance }}" id="demo_balance" name="demo_balance" type="text" placeholder="500"><span class="input-group-text"><i data-feather="dollar-sign"></i></span>
                                  </div>
                              </div>
                          </div> 
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3">
                                  <label class="form-label">Trade Profit</label>
                                  <div class="input-group">
                                    <input class="form-control" value="{{ $data->trade_profit }}" id="trade_profit" name="trade_profit" type="text" placeholder="20"><span class="input-group-text"><i data-feather="percent"></i></span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                              <div class="mb-3">
                                  <label class="form-label">Referral Bonus</label>
                                  <div class="input-group">
                                    <input class="form-control" value="{{ $data->referral_bonus }}" id="referral_bonus" name="referral_bonus" type="text" placeholder="10"><span class="input-group-text"><i data-feather="percent"> </i></span>
                                  </div>
                                </div>
                          </div>
                            <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                              <div class="mb-3 row">
                                <div class="col-sm-12 col-xl-12 col-12 col-md-12">
                                  <label class="form-label" for="user_register">Withdrawal Limit</label>
                                  <select class="form-control text-info" id="user_registration" name="withlimit" required>
                                      @if ($data->withlimit == 'enabled')
                                      <option value="enabled">Enabled</option>
                                      <option value="disabled">Disabled</option>
                                      @else
                                      <option value="disabled">Disabled</option>
                                       <option value="enabled">Enabled</option>
                                      
                                      @endif
                                    <option></option>

                                  </select>
                                </div>
                              </div>
                          </div>
                      </div>
                    
                  </div>

                  <div class="card-footer text-end">
                    <button class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
<script>
    $('#primary_colour').spectrum({
        type: "component",
        showInput: true,
        showButtons: false,
        allowEmpty: false

    });

    $('#secondary_colour').spectrum({
        type: "component",
        showInput: true,
        showButtons: false,
        allowEmpty: false

    });
</script>
@endsection