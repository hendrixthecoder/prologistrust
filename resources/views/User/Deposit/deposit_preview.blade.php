@extends('Layouts.user')

@section('title')
Deposit Preview
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

<br> <br>
 
<div class="row layout-top-spacing justify-content-center">
  
   
<div id="card_9" class="col-lg-8 col-xl-8 col-md-10 col-10 layout-spacing">
  <div class="statbox widget box box-shadow">
      <div class="widget-header">
          <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                  <h4 class="text-center" style="text-transform: uppercase;"> <span class="text-primary"> {{ __ ($gateway->name) }} </span> </h4>
              </div>
          </div>
      </div>

      <div class="widget-content widget-content-area">

          <hr style="background-color:#2196F3; height:1px; width:100%;"/>

          <div class="card component-card_9">
            <div class="text-center">

            </div>
              <div class="card-body">
              
                            <div class="text-center">
                                        <p style="text-transform: uppercase;">Trx ID:  {{ __ ($trx_id) }} </p>
                                        <p> Amount: <span class="text-success"> {{__($amount) }} USD </span> </p>
                                        <p>Username: {{ Auth::user()->firstname}} {{ Auth::user()->lastname}} </p>
                                        <p> Gateway Charge: <span class="text-warning"> {{ __($gateway_charge) }} %</span>  </p>
                                        <p> Charge: <span class="text-danger"> {{ __($charge) }} USD</span>  </p>
                                        <p><span class="text-success">Payable: {{ __($payable) }} USD </span> </p>
                                        <p><span class="text-success">Total: {{ __($payable) }} USD </span> </p>
                           </div>


                    <form method="post" enctype="multipart/form-data"  action="{{url('user/deposit/confirm')}}">
                        @csrf 

                                <input type="hidden" value="{{ __ ($trx_id) }}" name="trx_id" id="trx_id"> <br>
                                <input type="hidden" value="{{ __ ($amount) }}" name="amount" id="amount"> <br>
                                <input type="hidden" value="{{ __ ($gateway->name) }}" name="method_name" id="method_name"> <br>

                              <div class="form-group">
                                <label for="amount">Payment Proof: </label>
                                <input type="file" class="form-control custom-file" name="image" id="image">
                              </div>
                  
                           <br>

                            <div class="text-center">
                                <button type="submit" class="btn btn-rounded btn-primary">Deposit Now </button>
                            </div>
                            
                            <br>
                        </form> 

              </div>
          </div>

      </div>
  </div>
</div>



</div>

@endsection