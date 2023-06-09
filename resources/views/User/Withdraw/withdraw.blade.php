@php
$settings = DB::table('site_settings')->where('id', '1')->first();
@endphp
@extends('Layouts.user')

@section('title')
  @lang('text.witD')
@endsection

@section('content')
<div class="row layout-top-spacing justify-content-center">
  <div class="col-sm-12 col-md-6 layout-spacing">
      @if (session()->has('errors'))
        <div class="alert alert-danger mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
          <strong>{{session()->get('errors')}}</strong>
        </div>
      @endif
      @if (session()->has('success'))
        <div class="alert alert-success mb-4" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
          <strong>{{session()->get('success')}}</strong>
        </div>
      @endif
  </div>
</div>

  <div class="row layout-top-spacing justify-content-center">
    <div class="col-sm-12 col-md-10 layout-spacing">

      <div class="card component-card_3 p-4">
        <div class="card-heading">
          <h5 class="title-text">@lang('text.witDFunds')</h5>
        </div>
        <div class="card-body">
          @if ($today == "Sunday" || $today == "Saturday")
            <form method="POST" action="{{url('/user/request_withdraw')}}" class="form">
            @csrf
            <div class="form-group row mb-4">
              <label for="" class="text-danger">@lang('text.minWitd')</label> 
              @if($settings->withlimit == 'enabled')
              
              <label for="" class="text-success">@lang('text.dailyLim') ${{Auth::user()->withlimit}}</label> 
              @endif
              
            </div>
            
            <div class="form-group row  mb-4">
              <label for="wallet_type" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">@lang('text.selAcc')</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5"><i class="fas fa-wallet"></i></span>
                  </div>
                  <select class="form-control form-control-sm" id="wallet_type" name="account_type">
                    <option value="profit">@lang('text.profAcc') ${{Auth::User()->profit}}</option>
                    <option value="trading">@lang('text.tradAcc') ${{Auth::User()->rbalance}}</option>
                    <option value="bonus">@lang('text.refBonus') ${{Auth::User()->bonus}}</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row  mb-4">
              <label for="wallet_type" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">@lang('text.walType')</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5"><i class="fas fa-wallet"></i></span>
                  </div>
                  <select class="form-control form-control-sm" id="wallet_type" name="wallet_type">
                    <option value="Bitcoin">@lang('text.btc')</option>
                    <option value="Ethereum">@lang('text.eth')</option>
                    <option value="Perfect Money">@lang('text.pMoney')</option>
                    <option value="Tether USD (USDT)">@lang('text.usdt')</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group row  mb-4">
              <label for="wallet_address" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">@lang('text.walAdd')</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5"><i class="fas fa-wallet"></i></span>
                  </div>
                  <input type="text" class="form-control form-control-sm" id="wallet_address" name="wallet_address" required>
                </div>
              </div>
            </div>
            <div class="form-group row  mb-4">
              <label for="amount" min="15" class="col-sm-2 col-md-4 col-form-label col-form-label-sm">@lang('text.amount')</label>
              <div class="col-sm-10 col-md-8">
                <div class="input-group mb-0">
                  <input type="number" class="form-control" id="amount" name="amount" required>
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon6">USD</span>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" class="form-control form-control-sm" id="trx_hash" name="trx_hash" readonly>
            <div class="card-footer text-right">
                <button class="btn btn-primary" type="submit">@lang('text.witDFunds')</button>
            </div>
          </form>
          @else
            <div class="text-center text-light">
              <h5>@lang('text.witDSunSat')</h5>
            </div>
          @endif
          
        </div>
      </div>

    </div>
  </div>
@endsection

@section('script')
    <script>

        $(document).ready(function(){
            document.getElementById('trx_hash').value = token();
        });

        function token(){
          var hash =  Math.random().toString(36).substr(2);
          return '#' + hash + hash + new Date().getTime().toString();
        }
    </script>
@endsection