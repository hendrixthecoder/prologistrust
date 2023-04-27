@extends('Layouts.user')

@section('title')
    @lang('text.purPlanRev')
@endsection

@section('content')

<div class="row layout-top-spacing">
  <div class="col-xl-12">

      @if(session()->has('errors'))

            <div class="alert alert-arrow-left alert-icon-left alert-light-warning mb-4" role="alert" style="border-color: transparent;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg> </button>
              <i class="fas fa-warning"> </i>
              <strong>Warning!  {{ session()->get('errors') }} </strong>
            </div>
            
      @endif
      
      @if(session()->has('success'))

             <div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4" role="alert" style="border-color: transparent; background-color:#ffffff;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg></button>
                <i class="fas fa-activity"> </i>
                <strong>Success!  {{ session()->get('success') }} </strong>
            </div>

      @endif

    </div>

</div>

<div class="row layout-top-spacing justify-content-center">

@foreach ($plans as $data)

    <div class="col-xl-10">
           <div class="row justify-content-center">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center text-info" style="text-transform: uppercase;"> {{ $data->name }} </h3>
                </div>
            </div>

     <div class="card component-card_7">
        <div class="card-body">

            <div class="row mb-4 mt-3">

                <div class="col-sm-3 col-12">
                    <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">@lang('text.btc')</a>
                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">@lang('text.eth')</a>
                    <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">@lang('text.usdt')</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">@lang('text.pMoney')</a>
                    <a class="nav-link" id="v-pills-card-tab" data-toggle="pill" href="#v-pills-card" role="tab" aria-controls="v-pills-card" aria-selected="false">@lang('text.credCard')</a>
                    </div>
                </div>

                <div class="col-sm-9 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                 <h4 class="mb-4 text-warning">@lang('text.depWith') @lang('text.btc')</h4>
                                    <p class="mb-4">
                                    @lang('text.sendAmtDep')                                               
                                    </p>

                                    <p> <span class="text-danger"> @lang('text.instruction') </span> @lang('text.thisAddText') <a href="https://www.localbitcoins.com"> Localbitcoins.com</a> @lang('text.ifNoAny')</p>  
                                        
                                        <p class="text-danger"> @lang('text.note') </p>
                                        <p>@lang('text.oncePayMade')</p>

                                            <br>

                                            <div class="input-group pill-input-group">
                                                <input class="form-control" type="text" aria-label="btc wallet" value="3MPY2MxGzH3CNzpTuzXywi1LEWgGtKiZys" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="3MPY2MxGzH3CNzpTuzXywi1LEWgGtKiZys" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                            </div>
                                            <br>
                                            <div class="text-center">
                                                <img class="mr-3" src="{{ asset('user/assets/img/btc.jpeg') }}" alt="barcode" style="width: 300px; height:300px;">
                                            </div>
                                        
                             </div>

                             <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                   <h4 class="mb-4 text-warning">@lang('text.depWith') @lang('text.eth')</h4>
                                    <p class="mb-4">
                                        @lang('text.sendAmtDep')
                                    </p>

                                    <p> <span class="text-danger"> @lang('text.instruction') </span> @lang('text.thisAddTextEth')</p>  
                                        
                                        <p class="text-danger">@lang('text.note')</p>
                                        <p> @lang('text.oncePayMade') </p>

                                            <br>

                                            <div class="input-group pill-input-group">
                                                <input class="form-control" type="text" aria-label="eth wallet" value="0x198Ce0E09df1b6687579547312F6a6cA545dD122" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="0x198Ce0E09df1b6687579547312F6a6cA545dD122" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                            </div>
                                            <br>

                                            <div class="text-center">
                                                <img class="mr-3" src="{{ asset('user/assets/img/eth.jpeg') }}" alt="barcode" style="width: 300px; height:300px;">
                                            </div>

                               </div>

                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <h4 class="mb-4 text-warning">@lang('text.depWith') @lang('text.usdt')</h4>
                                                <p class="mb-4">
                                                    @lang('text.sendAmtDep')                                           
                                                </p>

                                                <p> <span class="text-danger"> @lang('text.instruction') </span>@lang('text.thisAddTextUsdt')</p>  
                                                    
                                                    <p class="text-danger"> @lang('text.note') </p>
                                                    <p>@lang('text.oncePayMade')</p>

                                                        <br>

                                                        <div class="input-group pill-input-group">
                                                            <input class="form-control" type="text" aria-label="btc wallet" value="TTTP5kMEm2Q2s81dfB3zthHx3H3iwmXSTC" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="TTTP5kMEm2Q2s81dfB3zthHx3H3iwmXSTC" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                                        </div>
                                                        <br>
                                                        <br>

                                                        <div class="text-center">
                                                            <img class="mr-3" src="{{ asset('user/assets/img/usdt.jpeg') }}" alt="barcode" style="width: 300px; height:300px;">
                                                            <br><br>
                                                            <small>@lang('text.sendOnlyTRC')<br>@lang('text.permLoss')</small>
                                                        </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <h4 class="mb-4 text-warning">@lang('text.depWith') @lang('text.pMoney')</h4>
                                                <p class="mb-4">
                                                    @lang('text.sendAmtDep')                                               
                                                </p>

                                                <p> <span class="text-danger"> @lang('text.instruction') </span>@lang('text.thisAddTextPMoney')</p>  
                                                    
                                                <p class="text-danger"> @lang('text.note') </p>
                                                <p>@lang('text.oncePayMade')</p>

                                                <br>

                                                <div class="input-group pill-input-group">
                                                    <input class="form-control" type="text" aria-label="btc wallet" value="U31835402" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="U31835402" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                                </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-card" role="tabpanel" aria-labelledby="v-pills-card-tab">
                                                <h4 class="mb-4 text-warning">@lang('text.depWith') @lang('text.credCard')</h4>
                                                
                                                <br>

                                                   <div class="mt-4 mx-4">
                                                        <div class="text-center">
                                                            <img src="{{asset ('user/assets/img/card.png')}}" class="card-img-top rounded" alt="widget-card-2" style="width: 150px;">
                                                        </div>

                                                            <br>

                                                        <div class="form mt-3">
                                                            <div class="inputbox col-lg-10"> <span>@lang('text.cardHoldName')</span> <br> <input type="text" name="name" class="form-control" required="required"> <br>  </div>
                                                            <div class="inputbox col-lg-10"> <span>@lang('text.cardHoldNum')</span> <br> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <br>  </div>
                                                            <div class="d-flex flex-row">
                                                                <div class="inputbox col-lg-5"> <span>@lang('text.cardExpDate')</span> <br> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> </div> &nbsp;
                                                                <div class="inputbox col-lg-5"> <span>@lang('text.cvv')</span> <br> <input type="text" name="name" min="1" max="999" class="form-control" required="required">  </div>
                                                            </div>

                                                            <br> 

                                                            <div class="col-lg-10"> <button class="btn btn-success btn-block">@lang('text.payWitCard')</button> </div>
                                                        </div>
                                                    </div>

                                </div>

                    
                    </div>
                </div>

            </div>

            <hr style="background-color:#2196F3; height:1px; width:100%;"/>

                <div class="text-center">

                    <a href="#depositModal" class="btn btn-outline-primary btn-rounded"  data-toggle="modal" data-target="#depositModal">@lang('text.subPay')</a>

                </div>

        </div>
            

    </div>

        

    </div>

@endforeach

</div>

<br>

@foreach ($plans as $invest)

<!-- Modal -->

<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    

    <div class="modal-content">

        <div class="modal-header">
            <h6 class="modal-title" id="exampleModalCenterTitle">@lang('text.fillDet')</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <form method="post" enctype="multipart/form-data"  action="{{url('user/invests/buy_invest/'.$invest->id)}}">
          @csrf 

        <div class="modal-body text-left">

             <input type="hidden" class="form-control" value="{{ __($trx_id) }}" id="trx_id" name="trx_id"> 

              <div class="form-group hidden">
                <div class="input-group mb-5">
                  <input type="hidden" class="form-control" name="duration" id="duration" value="{{ $invest->duration }}">
                  <input type="hidden" class="form-control"  name="roi" id="roi" value="{{ $invest->roi }}">
                  <input type="hidden" class="form-control"  name="time_left" id="time_left" value="122">   
                </div>   
              </div>

              <div class="form-group" hidden>
                  <label for="amount">Plan: </label>
                  <input type="hidden" class="form-control" placeholder="" name="plan_id" id="Plan_id" value="{{ $invest->id }}">
              </div>
              <div class="text-center">
                <h5>@lang('text.limit') <span class="text-info">${{$invest->min}} - ${{$invest->max}}</span></h5>
              </div>
                <label for="payment_proof"> @lang('text.amount')* </label>
                 <input type="number" class="form-control" min="{{$invest->min}}" max="{{$invest->max}}" name="amount" id="amount" required>
              
              <br>

                  <label for="payment_proof">@lang('text.uplProof')* </label> <br>
                  <input type="file" class="form-control" id="image" name="image" required/>

                    <br><br>
                    
                    <label for="payment_proof">@lang('text.methodOfPay')* </label>
                    <select id="method" name="method" class="form-control" required readonly>
							<option selected> --@lang('text.modeOfPay')--</option>
                            <option>@lang('text.btc')</option>
                            <option>@lang('text.eth')</option>
                            <option>@lang('text.usdt')</option>
                            <option>@lang('text.pMoney')</option>	
					</select>
            
                  
        </div>

        <div class="modal-footer">
            <button class="btn btn-dark" data-dismiss="modal"><i class="flaticon-cancel-12"></i> @lang('text.cancel') </button>
            <button type="submit" name="btnsubmit" class="btn btn-primary">@lang('text.subPay')</button>
        </div>
      </form> 
    </div>

</div>

</div>

@endforeach

@endsection

@section('script')
	<script> 
	function myFunction(address) {

    var TempText = document.createElement("input");
    TempText.value = address;
    document.body.appendChild(TempText);
    TempText.select();
    
    document.execCommand("copy");
    document.body.removeChild(TempText);
    
    alert("Wallet address copied: " + address);
}

	</script>
@endsection