@extends('Layouts.user')

@section('title')
    {{ __($page_title) }}
@endsection

@section('content')

<div class="row layout-top-spacing">
  <div class="col-xl-12">
      @if(session()->has('errors'))

            <div class="alert alert-arrow-left alert-icon-left alert-light-warning mb-4" role="alert" style="border-color: transparent;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg> </button>
              <i class="fas fa-warning"> </i>
              <strong>{{ session()->get('errors') }} </strong>
            </div>

      @endif

      @if(session()->has('success'))

             <div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4" role="alert" style="border-color: transparent; background-color:#ffffff;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg  data-dismiss="alert"> ... </svg></button>
                <i class="fas fa-activity"> </i>
                <strong>{{ session()->get('success') }} </strong>
            </div>

      @endif
    </div>
</div>


<div class="row layout-top-spacing justify-content-center">

        <div class="col-xl-10">

         <div class="card component-card_7">
            <div class="card-body">

                <div class="row mb-4 mt-3">

                    <div class="col-sm-3 col-12">
                        <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Bitcoin</a>
                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ethereum</a>
                        <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Usdt</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Perfect Money</a>
                        <a class="nav-link" id="v-pills-card-tab" data-toggle="pill" href="#v-pills-card" role="tab" aria-controls="v-pills-card" aria-selected="false">Credit Card</a>
                        </div>
                    </div>

                    <div class="col-sm-9 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                                 <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                     <h4 class="mb-4 text-warning">Deposit with Bitcoin!</h4>
                                        <p class="mb-4">
                                        You are to send amount to the address below or scan the QR code to complete payment.
                                        </p>

                                        <p> <span class="text-danger"> Instruction: </span> This address is for only deposits with Bitcoin

                                            In case you send a different amount, your account will be updated accordingly.

                                            Get bitcoins at <a href="https://www.localbitcoins.com"> Localbitcoins.com</a> if you don't already have any.</p>

                                            <p class="text-danger"> Note: </p>
                                            <p> Once payment has ben made, take screenshot of the transaction to be uploaded as proof of payment </p>

                                                <br>

                                                <div class="input-group pill-input-group">
                                                    <input class="form-control" type="text" aria-label="btc wallet" value="3HQ74jh8maghhAxVg1vgCr9yC9W73yTts8" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="3HQ74jh8maghhAxVg1vgCr9yC9W73yTts8" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                                </div>
                                                <br>
                                                <div class="text-center">
                                                    <img class="mr-3" src="{{ asset('user/assets/img/btc.jpeg') }}" alt="barcode" style="width: 300px; height:300px;">
                                                </div>

                                 </div>

                                 <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                       <h4 class="mb-4 text-warning">Deposit with Ethereum!</h4>
                                        <p class="mb-4">
                                        You are to send amount to the address below or scan the QR code to complete payment.
                                        </p>

                                        <p> <span class="text-danger"> Instruction: </span> This address is for only deposits with Ethereum

                                            In case you send a different amount, your account will be updated accordingly.</p>

                                            <p class="text-danger"> Note: </p>
                                            <p> Once payment has ben made, take screenshot of the transaction to be uploaded as proof of payment </p>

                                                <br>

                                                <div class="input-group pill-input-group">
                                                    <input class="form-control" type="text" aria-label="btc wallet" value="0xbD57693a0011ab6C5A641Af882113d33912e5FE8" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="0xbD57693a0011ab6C5A641Af882113d33912e5FE8" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                                </div>
                                                <br>

                                                <div class="text-center">
                                                    <img class="mr-3" src="{{ asset('user/assets/img/eth.jpeg') }}" alt="barcode" style="width: 300px; height:300px;">
                                                </div>

                                   </div>

                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <h4 class="mb-4 text-warning">Deposit with USDT!</h4>
                                                    <p class="mb-4">
                                                    You are to send amount to the address below or scan the QR code to complete payment.
                                                    </p>

                                                    <p> <span class="text-danger"> Instruction: </span> This wallet address is for only deposits with USDT.

                                                        In case you send a different amount, your account will be updated accordingly.</p>

                                                        <p class="text-danger"> Note: </p>
                                                        <p> Once payment has ben made, take screenshot of the transaction to be uploaded as proof of payment </p>

                                                            <br>

                                                            <div class="input-group pill-input-group">
                                                                <input class="form-control" type="text" aria-label="btc wallet" value="0x5D66B9905c558D49a4ED3b94BdA749D2F03f87fB" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="0x5D66B9905c558D49a4ED3b94BdA749D2F03f87fB" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                                            </div>
                                                            <br>

                                                            <div class="text-center">
                                                                <img class="mr-3" src="{{ asset('user/assets/img/usdt.jpeg') }}" alt="barcode" style="width: 300px; height:300px;">
                                                            </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <h4 class="mb-4 text-warning">Deposit with Perfect Money!</h4>
                                                    <p class="mb-4">
                                                    You are to send amount to the address below to complete payment.
                                                    </p>

                                                    <p> <span class="text-danger"> Instruction: </span> This wallet address is for only deposits with Perfect Money.

                                                    In case you send a different amount, your account will be updated accordingly.</p>

                                                    <p class="text-danger"> Note: </p>
                                                    <p> Once payment has ben made, take screenshot of the transaction to be uploaded as proof of payment </p>

                                                    <br>

                                                    <div class="input-group pill-input-group">
                                                        <input class="form-control" type="text" aria-label="btc wallet" value="U31835402" id="myInput" readonly> <button class="input-group-text btn btn-primary" role="button" value="U31835402" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
                                                    </div>

                                    </div>

                                    <div class="tab-pane fade" id="v-pills-card" role="tabpanel" aria-labelledby="v-pills-card-tab">
                                                    <h4 class="mb-4 text-warning">Deposit with Credit Card!</h4>

                                                    <br>

                                                       <div class="mt-4 mx-4">
                                                            <div class="text-center">
                                                                <img src="{{asset ('user/assets/img/card.png')}}" class="card-img-top rounded" alt="widget-card-2" style="width: 150px;">
                                                            </div>

                                                                <br>

                                                            <div class="form mt-3">
                                                                <div class="inputbox col-lg-10"> <span>Cardholder Name</span> <br> <input type="text" name="name" class="form-control" required="required"> <br>  </div>
                                                                <div class="inputbox col-lg-10"> <span>Card Number</span> <br> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <br>  </div>
                                                                <div class="d-flex flex-row">
                                                                    <div class="inputbox col-lg-5"> <span>Expiration Date</span> <br> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> </div> &nbsp;
                                                                    <div class="inputbox col-lg-5"> <span>CVV</span> <br> <input type="text" name="name" min="1" max="999" class="form-control" required="required">  </div>
                                                                </div>

                                                                <br>

                                                                <div class="col-lg-10"> <button class="btn btn-success btn-block">Pay with card</button> </div>
                                                            </div>
                                                        </div>

                                    </div>


                        </div>
                    </div>

                </div>

                <hr style="background-color:#2196F3; height:1px; width:100%;"/>

                    <div class="text-center">

                        <a href="#depositModal" class="btn btn-outline-primary btn-rounded"  data-toggle="modal" data-target="#depositModal"> Submit Payment</a>

                    </div>

            </div>


        </div>



        </div>

    </div>

    <br>

    <!-- Modal -->

    <div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">


        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Enter details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>

            <form method="post" enctype="multipart/form-data"  action="{{url('user/deposit/confirm')}}">
              @csrf

            <div class="modal-body text-left">

                  <div class="text-center">
                    <h5>Minimum: <span class="text-info">$100</span></h5>
                  </div>
                    <label for="payment_proof"> Amount* </label>
                     <input type="number" class="form-control" min="100" name="amount" id="amount" required>

                  <br>

                      <label for="payment_proof"> Upload Proof of Payment* </label> <br>
                      <input type="file" class="form-control" id="image" name="image" required/>

                        <br><br>

                        <label for="payment_proof"> Method of Payment* </label>
                        <select id="method" name="method" class="form-control" required readonly>
                                <option selected>Bitcoin</option>
                                <option>Ethereum</option>
                                <option>Usdt</option>
                                <option>Perfect Money</option>
                        </select>


            </div>

            <div class="modal-footer">
                <button class="btn btn-dark" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel </button>
                <button type="submit" name="btnsubmit" class="btn btn-primary">Buy</button>
            </div>
          </form>
        </div>

    </div>

    </div>

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
    <script type="text/javascript">

        $(document).ready(function () {

            setTimeout(nextNotice, 15000);
            function nextNotice()
            {
                var numRand = Math.floor(Math.random() * 1010);
                var items = ['0.9', '10.5', '15', '1.9', '2', '5'];
                var doRand = items[Math.floor(Math.random() * items.length)];
                $.notify("  ID00"+numRand+" Just Earned $"+doRand, {align:"left", verticalAlign:"bottom", animation:true, animationType:"scale", blur: 0.2, icon:"map-marker-alt", color: "#009688", delay:5000});
                setTimeout(nextNotice, 15000);
            }
        });

          </script>
@endsection
