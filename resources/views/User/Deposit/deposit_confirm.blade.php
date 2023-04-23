@extends('Layouts.user')

@section('title')
    Deposit Confirm | Prologis
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="d-flex align-items-center">
              <div class="mr-auto">
                  <h3 class="page-title">Deposit Confirm</h3>
                  <div class="d-inline-block align-items-center">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item" aria-current="page">User</li>
                              <li class="breadcrumb-item active" aria-current="page">Deposit Confirm</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              <div class="right-title">
                  <div class="d-flex mt-10 justify-content-end">
                    
                  </div>
              </div>
          </div>
      </div>

      <!-- Main content -->
      <section class="content">
          <div class="row justify-content-center">
              {{-- Cards goes here --}}
            <div class="col-sm-10 col-md-10 col-xl-10">
              <div class="box bb-3 border-dark">
                <div class="box-header text-center">
                <h3 class="box-title"><strong>Confirm Payment</strong></h3>
                </div>
      
                <div class="box-body">

                    <h6 class="text-center"> You have requested <span class="text-success"> 500.00 USD </span> , Please pay <span class="text-success"> 506.81 USD </span> for successful payment </h6>

                    <h4 class="text-center"> Please Follow the Instructions below </h4>

                    <h6 class="text-center"> <u> <strong>  Please Send to the Wallet Address below:  </strong> </u> </h6>

                    <form action="" class="form">

                        <div class="row justify-content-center">
                          <div class="col-xl-8">
                            <div class="form-group">
                                <div class="input-group">
                                     <input type="text" class="form-control text-info" value="1xerfdhuh7rhdh74y7hf5u8u4ufh" id="btcAddress" readonly /> <span class="input-group-text copytext copyBoard" id="btcAddress"> <i class="fas fa-copy text-info" style="cursor: pointer;"> </i> </span>
                                </div>
                            </div>

                            <h6 class="text-center text-primary"> <u> <strong>Or Scan Code Below </strong> </u>  </h6>

                            <div class="text-center">
                                 <img src="https://script.viserlab.com/tradelab/assets/images/cryptoCurrency/6090fec6be7bc1620115142.jpg" class="barcode-thumbnail" />
                            </div>

                            <br>

                      

                            <div class="form-group">
                                <label> Trasaction ID: </label>
                                     <input type="text" class="form-control" placeholder="Enter Transaction ID"  />
                            </div>

                            <div class="text-end">
                                <h6 class="text-info"> Payment Proof <span class="text-danger"> * </span> </h6>
                                 <img src="" class="barcode-thumbnail" />
                                 <br> <br>

                                 <button type="button" class="btn btn-info"> Select Screenshot  </button>
                            </div>

                            

                            <br>

                          </div>
                        </div>
            
            
                      </form>

                    
                </div>

                <div class="box-footer text-right">
                  
                </div>

              </div>
            </div>

            
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->

@endsection

@section('scripts')

<script>
    $('.copyBoard').click(function(){
    "use strict";
        var copyText = document.getElementById("btcAddress");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        /*For mobile devices*/
        document.execCommand("copy");
        
        alert('Wallet Address Copied to Clipboard');
  });
</script>

@endsection


<style type="text/css">
      .barcode-thumbnail{
          max-width: 300px;
          max-height: 300px;
      }
</style>
