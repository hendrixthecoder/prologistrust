<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@lang('text.trade') | Prologis</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <link href="{{asset('user/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{asset('user/assets/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('user/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('user/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('user/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('user/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/widgets/modules-widgets.css')}}">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/elements/alert.css')}}">
    <link href="{{asset('user/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('user/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('user/assets/css/components/custom-counter.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('user/plugins/animate/animate.css')}}">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/plugins/table/datatable/dt-global_style.css')}}">
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/forms/switches.css')}}">
    <link href="{{asset('user/plugins/pricing-table/css/component.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <style>

        #rotate{
            width: 100vw;
            height: 100vh;
            position: absolute;
            background-color: #121212;
            display: flex;
            flex-direction: column;
            visibility: hidden;
            justify-content: center;
            align-items: center;
            z-index: 4;
        }
        #rotate > img{
            width: 150px;
            height: 150px;
        }
        #rotate > h5{
            font-weight: bold;
            font-size: 14px;
        }
        .sub-header-container{
            position: absolute;
            top: 0;
        }
        .sidebar-wrapper{
            top: 53px;
        }
        #content{
            margin-top: 53px;
        }
        .layout-px-spacing{
            height: calc(100vh - 53px);
        }
        .layout-spacing{
            padding: 8px;
        }
        .row{
            height: 100%;
        }
        .trade-widget{
            height: 100%;
        }
        @media screen and (max-width: 600px){

        }
    </style>
</head>
<body>
        <!-- BEGIN LOADER -->
        <div id="load_screen">
        <div class="loader">
          <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
          </div>
        </div>
      </div>
      <!--  END LOADER -->

      <!-- Rotate Gif -->
      <div id="rotate">
        <img src="{{asset('user/assets/img/rotate.gif')}}"/>
        <h5 class="text-info">@lang('text.pleaseRotate')</h5>
      </div>
      <!-- End Rotate Gif -->

      <!--  BEGIN NAVBAR  -->
        <div class="sub-header-container">
            <header class="header navbar navbar-expand-sm">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

                <ul class="navbar-nav flex-row">
                    <li>
                        <div class="page-header">
                            <nav class="breadcrumb-one" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">@lang('text.user')</li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>@lang('text.trade')</span></li>
                                </ol>
                            </nav>

                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row ml-auto ">
                <li style="margin-right: 8px;">
                    <a href="{{url('/user/deposit')}}" class="btn btn-primary btn-sm">@lang('text.deposit')</a>
                </li>
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon accupdate">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>@lang('text.demoAcc')<span class="accountbalance"> {{Auth::User()->dbalance}} </span> USD</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Demo Account:{{Auth::User()->dbalance}} USD" href="javascript:void(0);">@lang('text.demoAcc') <span class="accountbalance"> {{Auth::User()->dbalance}} </span> USD</a>
                        </div>
                    </div>
                </li>
            </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->
      <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="search-overlay"></div>

        @include('Includes.user.sidebar')

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 layout-spacing">
                        <div class="trade-widget">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div id="tradingview_27e17"></div>

                            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                            <script type="text/javascript">
                            new TradingView.widget(
                            {
                            "width": "100%",
                            "height": "100%",
                            "symbol": "NYSE:PLD",
                            "interval": "1",
                            "timezone": "Etc/UTC",
                            "theme": "dark",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "hide_top_toolbar": true,
                            "allow_symbol_change": true,
                            "save_image": false,
                            "container_id": "tradingview_27e17"
                            }
                            );
                            </script>
                            </div>
                            <!-- TradingView Widget END -->

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 layout-spacing">
                    <div class="card component-card_3">

                        <div class="card-body">
                            <input type="hidden" name="txt_real" id="txt_real" value="{{Auth::User()->dbalance}}">
                            <input type="hidden" name="txt_demo" id="txt_demo" value="{{Auth::User()->dbalance}}">
                            <input type="hidden" name="txt_userid" id="txt_userid" value="{{Auth::User()->id}}">
                            <input type="hidden" name="txt_stockid" id="txt_stockid" value="{{$stock->id}}">
                            <input type="hidden" name="txt_winloss" id="txt_winloss" value="1">
                            <input type="hidden" name="txt_result" id="txt_result" value="win">
                            <input type="hidden" name="txt_stock_name" id="txt_stock_name" value="{{$stock->name}}">

                            <label for="form-label" aria-label="Small">@lang('text.amount')</label>
                            <div class="input-group input-group-sm mb-2">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">$</span>
                            </div>
                            <input type="text" id="txt_amount" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="100">
                            </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput2" class="form-label-sm text-sm">@lang('text.duration')</label>
                            <select id="duration" class="custom-select custom-select-sm timeleft">
                            <option value="1" selected>30 Sec</option>
                            <option value="2">1 Min</option>
                            <option value="3">2 Min</option>
                            <option value="4">30 Min</option>
                            </select>
                        </div>
                        <button type="submit" role="submit" class="btn btn-success btn-sm btn-buy btn-block"><i class="fa fa-arrow-up"> </i> @lang('text.buy') </button>
                        <button type="submit" role="submit" class="btn btn-danger btn-sm btn-block btn-sell"><i class="fa fa-arrow-down"> </i> @lang('text.sell') </button>
                        </div>
                        <div class="card-footer items_block">
                            <div class="timer"></div>
                            <div class="moneyret"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

     </div>

     <!-- Low Balance Modal -->
     <div id="lowbalanceModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                    <svg enable-background="new 0 0 256 256" height="60" viewBox="0 0 256 256" width="60" xmlns="http://www.w3.org/2000/svg"><switch><foreignObject height="1" requiredExtensions="http://ns.adobe.com/AdobeIllustrator/10.0/" width="1"/><g><circle cx="128" cy="128" fill="#382b73" r="120"/><circle cx="128" cy="128" fill="#473080" r="102.5"/><path d="m193.33 116.283h-27.055l.008-24.448c.001-4.736-3.837-8.577-8.574-8.579l-95.019-.032c-4.736-.002-8.577 3.837-8.579 8.573l-.018 53.34c-.002 4.737 3.837 8.578 8.573 8.579l27.067.009v24.475c0 4.737 3.84 8.576 8.576 8.576h13.701c-3.259 3.733-5.248 8.602-5.248 13.946 0 11.728 9.508 21.236 21.236 21.236s21.236-9.507 21.236-21.236c0-5.344-1.989-10.213-5.247-13.946h49.342c4.737 0 8.576-3.84 8.576-8.576v-53.34c.001-4.737-3.839-8.577-8.575-8.577z" fill="#382b73"/><path d="m157.686 146.749-95.019-.032c-4.736-.002-8.575-3.843-8.573-8.579l.018-53.341c.002-4.736 3.843-8.575 8.579-8.573l95.019.032c4.737.002 8.575 3.842 8.573 8.579l-.018 53.341c-.001 4.736-3.842 8.574-8.579 8.573z" fill="#009add"/><path d="m166.265 134.314c-.001 4.736-3.842 8.575-8.579 8.573l-95.019-.032c-4.728-.002-8.56-3.829-8.572-8.554l-.001 3.836c-.002 4.736 3.837 8.577 8.573 8.579l95.019.032c4.736.002 8.577-3.837 8.579-8.573l.018-53.341c0-.009-.001-.017-.001-.025z" fill="#136da0"/><path d="m54.109 84.816h112.171v16.349h-112.171z" fill="#136da0"/><path d="m153.694 115.246-88.43-.03c-1.591 0-2.881-1.291-2.88-2.882 0-1.591 1.291-2.881 2.882-2.88l88.431.029c1.591.001 2.881 1.291 2.88 2.882-.001 1.592-1.292 2.882-2.883 2.881z" fill="#27c1e6"/><path d="m117.607 129.115-52.842-.018c-1.595 0-2.887-1.294-2.886-2.888 0-1.595 1.294-2.887 2.888-2.886l52.842.018c1.594.001 2.887 1.294 2.886 2.888-.001 1.595-1.294 2.887-2.888 2.886z" fill="#27c1e6"/><path d="m193.33 179.776h-95.019c-4.737 0-8.576-3.84-8.576-8.576v-53.34c0-4.737 3.84-8.576 8.576-8.576h95.019c4.736 0 8.576 3.84 8.576 8.576v53.34c0 4.736-3.84 8.576-8.576 8.576z" fill="#1caee4"/><path d="m187.811 141.412h-16.732c-1.472 0-2.402-1.581-1.688-2.868l8.366-15.066c.735-1.325 2.64-1.325 3.376 0l8.366 15.066c.714 1.287-.216 2.868-1.688 2.868z" fill="#fff"/><path d="m193.33 175.915h-95.019c-4.737 0-8.576-3.84-8.576-8.576v3.861c0 4.737 3.84 8.576 8.576 8.576h95.019c4.736 0 8.576-3.84 8.576-8.576v-3.861c0 4.736-3.84 8.576-8.576 8.576z" fill="#009add"/><path d="m111.332 142.853h-9.148c-1.895 0-3.43-1.536-3.43-3.43v-9.148c0-1.895 1.536-3.431 3.43-3.431h9.148c1.895 0 3.43 1.536 3.43 3.431v9.148c0 1.894-1.535 3.43-3.43 3.43z" fill="#009add"/><path d="m111.332 141.412h-9.148c-1.895 0-3.43-1.536-3.43-3.43v-9.148c0-1.895 1.536-3.43 3.43-3.43h9.148c1.895 0 3.43 1.536 3.43 3.43v9.148c0 1.894-1.535 3.43-3.43 3.43z" fill="#fddd3a"/><g fill="#f6ca14"><path d="m103.327 129.977h6.861v6.861h-6.861z"/><path d="m98.754 129.977h16.009v.686h-16.009z"/><path d="m98.754 136.152h16.009v.686h-16.009z"/><path d="m95.666 133.065h16.009v.686h-16.009z" transform="matrix(0 -1 1 0 -29.738 237.078)"/><path d="m101.841 133.065h16.009v.686h-16.009z" transform="matrix(0 -1 1 0 -23.563 243.253)"/></g><g fill="#fddd3a"><path d="m113.575 159.169h-13.635c-1.599 0-2.896-1.296-2.896-2.896 0-1.599 1.297-2.896 2.896-2.896h13.635c1.599 0 2.896 1.297 2.896 2.896 0 1.6-1.296 2.896-2.896 2.896z"/><path d="m139.144 159.169h-13.634c-1.599 0-2.896-1.296-2.896-2.896 0-1.599 1.297-2.896 2.896-2.896h13.635c1.6 0 2.896 1.297 2.896 2.896-.001 1.6-1.297 2.896-2.897 2.896z"/><path d="m164.714 159.169h-13.635c-1.599 0-2.896-1.296-2.896-2.896 0-1.599 1.297-2.896 2.896-2.896h13.635c1.599 0 2.896 1.297 2.896 2.896 0 1.6-1.297 2.896-2.896 2.896z"/><path d="m190.283 159.169h-13.635c-1.599 0-2.896-1.296-2.896-2.896 0-1.599 1.296-2.896 2.896-2.896h13.635c1.6 0 2.896 1.297 2.896 2.896 0 1.6-1.297 2.896-2.896 2.896z"/><path d="m153.325 170.376h-53.003c-1.6 0-2.896-1.297-2.896-2.896 0-1.6 1.297-2.896 2.896-2.896h53.003c1.599 0 2.896 1.296 2.896 2.896 0 1.599-1.297 2.896-2.896 2.896z"/></g><ellipse cx="128" cy="193.722" fill="#ef5a9d" rx="21.236" ry="21.236" transform="matrix(.23 -.973 .973 .23 -89.948 273.79)"/><path d="m137.154 200.719-3.997-3.997 3.997-3.997c1.424-1.424 1.424-3.733 0-5.157s-3.733-1.424-5.157 0l-3.997 3.997-3.997-3.997c-1.424-1.424-3.733-1.424-5.157 0s-1.424 3.733 0 5.157l3.997 3.997-3.997 3.997c-1.424 1.424-1.424 3.733 0 5.157s3.733 1.424 5.157 0l3.997-3.997 3.997 3.997c1.424 1.424 3.733 1.424 5.157 0s1.424-3.733 0-5.157z" fill="#e43d91"/><path d="m137.154 197.719-3.997-3.997 3.997-3.997c1.424-1.424 1.424-3.733 0-5.157s-3.733-1.424-5.157 0l-3.997 3.997-3.997-3.997c-1.424-1.424-3.733-1.424-5.157 0s-1.424 3.733 0 5.157l3.997 3.997-3.997 3.997c-1.424 1.424-1.424 3.733 0 5.157s3.733 1.424 5.157 0l3.997-3.997 3.997 3.997c1.424 1.424 3.733 1.424 5.157 0s1.424-3.733 0-5.157z" fill="#fede3a"/><path d="m122.843 193.722 1.45-1.45-5.447-5.447c-.334-.334-.583-.72-.76-1.128-.578 1.333-.33 2.938.76 4.028z" fill="#f7cb15"/><path d="m137.154 199.976c-1.424 1.424-3.733 1.424-5.157 0l-3.997-3.997-3.997 3.998c-1.424 1.424-3.733 1.424-5.157 0-.334-.334-.583-.72-.76-1.128-.578 1.333-.33 2.938.76 4.028 1.424 1.424 3.733 1.424 5.157 0l3.997-3.997 3.997 3.997c1.424 1.424 3.733 1.424 5.156 0 1.09-1.09 1.338-2.695.76-4.028-.176.408-.425.793-.759 1.127z" fill="#f7cb15"/><path d="m137.154 186.825-5.447 5.447 1.45 1.45 3.997-3.997c1.09-1.09 1.338-2.695.76-4.028-.177.408-.426.794-.76 1.128z" fill="#f7cb15"/></g></switch></svg>
                        <br>
                        &nbsp;
                        <p class="modal-text">@lang('text.insufBal')</p>
                    <a href="{{url('/user/deposit')}}" class="btn btn-outline-secondary btn-sm">@lang('text.deposit')</a>
                    </div
                </div>
                <div class="modal-footer md-button">
                    <button class="btn btn-outline-seconday" data-dismiss="modal"><i class="flaticon-cancel-12"></i>@lang('text.close')</button>
                </div>
            </div>
        </div>
    </div>

     <!-- End Low Balance Modal -->

      <!--Win Modal -->

<div class="modal fade" id="winModal" tabindex="-1" role="dialog" aria-labelledby="winModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <span style="color: #fff">@lang('text.tradeW') </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="text-muted tradeduration"> </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="@lang('text.close')">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
            </div>

                <img src="{{asset('dashboard/tradeimg.png')}}" alt="" width="auto" height="auto">


            <div class="modal-footer align-items-center justify-content-center text-center">
                <div class="text">
                    <small class="text-start text-muted"> @lang('text.amount') </small>  <br>
                    <span class="text-light text-lg amountstaked">  </span>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="text">
                    <small class="text-start text-muted"> @lang('text.earnings') </small>  <br>
                    <span class="text-success text-lg amountwon">  </span>
                </div>
                <hr>


            </div>


        </div>

    </div>

</div>
<!-- end win modal -->

 <!--Loss Modal -->

<div class="modal fade" id="lossModal" tabindex="-1" role="dialog" aria-labelledby="lossModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <span style="color: #fff"> Trade Lost</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="text-muted tradeduration"> </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
            </div>

                <img src="{{asset('dashboard/tradeimg.png')}}" alt="" height="auto" width="auto">


            <div class="modal-footer align-items-center justify-content-center text-center">
                <div class="text">
                    <small class="text-start text-muted"> Amount </small>  <br>
                    <span class="text-light text-lg amountstaked">  </span>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="text">
                    <small class="text-start text-muted"> Earnings </small>  <br>
                    <span class="text-danger text-lg"> $0.00 </span>
                </div>
                <hr>

            </div>


        </div>

    </div>

</div>
<!-- end loss modal -->
  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="{{asset('user/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('user/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{asset('user/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('user/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('user/assets/js/app.js')}}"></script>
  <script>
      $(document).ready(function() {
          App.init();
      });
  </script>
  <script src="{{asset('user/assets/js/custom.js')}}"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="{{asset('user/assets/js/dashboard/dash_2.js')}}"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="{{asset('user/plugins/table/datatable/datatables.js')}}"></script>
  <script>
      $('#zero-config').DataTable({
          "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
      "<'table-responsive'tr>" +
      "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
          "oLanguage": {
              "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
              "sInfo": "Showing page _PAGE_ of _PAGES_",
              "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
              "sSearchPlaceholder": "Search...",
             "sLengthMenu": "Results :  _MENU_",
          },
          "stripeClasses": [],
          "lengthMenu": [7, 10, 20, 50],
          "pageLength": 7
      });
  </script>
  <!-- END PAGE LEVEL SCRIPTS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="{{asset('user/assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('user/plugins/counter/jquery.countTo.js')}}"></script>
  <!-- END PAGE LEVEL SCRIPTS -->

  <!--  BEGIN CUSTOM SCRIPTS FILE  -->
  <script src="{{asset('user/assets/js/components/custom-counter.js')}}"></script>
  <!--  END CUSTOM SCRIPTS FILE  -->

  <script src="{{asset('user/plugins/highlight/highlight.pack.js')}}"></script>
  <script src="{{asset('user/assets/js/custom.js')}}"></script>
  <script src="{{asset('user/plugins/blockui/jquery.blockUI.min.js')}}"></script>
  <script src="{{asset('user/plugins/countdown/jquery.countdown.min.js')}}"></script>
  <script>
      document.addEventListener("DOMContentLoaded", initDetect)

        function initDetect(){
        window.addEventListener("resize", detectDevice)
        detectDevice()
        }

        function detectDevice(){
            let result = {
                device: !!navigator.maxTouchPoints ? 'mobile' : 'computer',
                orientation: !navigator.maxTouchPoints ? 'desktop' : !window.screen.orientation.angle ? 'portrait' : 'landscape'
            }
            var elem = document.documentElement;

            if(result.device == 'mobile' && result.orientation == 'portrait'){
                    document.getElementById('rotate').style.visibility = "visible";
            }
            else{
                    document.getElementById('rotate').style.visibility = "hidden";
            }
        }
  </script>

  <script>
      $(document).ready(function () {
        function anima ()
        {
           var block = $('.items_block');
        $(block).block({
            message: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>',
            timeout: 2000, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#515365',
                opacity: 0.9,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                color: '#fff',
                backgroundColor: 'transparent'
            }
        });
        }


        function createhistory ()
        {
            var user_id = $('#txt_userid').val();
                var data = {
					'user_id': $('#txt_userid').val(),
                    'stock_id': $('#txt_stockid').val(),
                    'stock_name': $('#txt_stock_name').val(),
                    'trade_amount': $('#txt_amount').val(),
                    'duration': $('#duration').val(),
                    'highlow': $('#txt_winloss').val(),
                    'result': $('#txt_result').val(),
				}

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/user/transaction/history/dcreate/" + user_id,
                data: data,
                dataType: "json",
                success: function (response) {
                    console.log(response.message);
                }
            });
        }

        //   btn buy
        $('.btn-buy').on('click', function() {
            var balance = $('#txt_real').val();
            var amount = $('#txt_amount').val();


            if (amount > balance){
                $('#lowbalanceModal').modal('show');
            }
            else
            {
                anima();
                var user_id = $('#txt_userid').val();
                var data = {
					'user_id': $('#txt_userid').val(),
                    'stock_id': $('#txt_stockid').val(),
                    'trade_amount': $('#txt_amount').val(),
                    'duration': $('#duration').val(),
				}
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/user/trade/dcommit/" + user_id,
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        if(response.status == 400)
						{
                            $('#lowbalanceModal').modal('show');
						}
                        else
                        {
                            $('.accupdate').html('<a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Demo Account: <span class="accountbalance"> ' + response.dbalance +'</span> USD</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>' +

                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">'+
                                '<a class="dropdown-item" data-value="Demo Account:' + response.dbalance +' USD" href="javascript:void(0);">Demo Account: <span class="accountbalance"> ' + response.dbalance +' </span> USD</a>'+
                                '<a class="dropdown-item" data-value="Demo Account: ' + response.dbalance +' USD" href="javascript:void(0);">Demo Account: ' + response.dbalance +' USD</a>'+

                            '</div>');

                            var outcome = [
                                "0",
                                "0",
                                "1",
                                "1",
                                "1"
                            ];

                            var size= outcome.length;

                            var x = Math.floor(size * Math.random());
                            var winloss = outcome[x];

                            $('#txt_winloss').val (outcome[x]);

                            $('#txt_real').val (response.dbalance);
                            $('#txt_demo').val (response.dbalance);
                            amount = parseInt(amount);
                            var rett = (amount / 100) * 30;
                            var arett = amount + rett;
                            $('.moneyret').html(' <h6 class="tx-inverse"> <i class="fa fa-wallet"> </i> Amount: <span class="text-secondary inv_amount">' + amount + ' USD</span></h6> ' +
                            ' <h6 class="tx-inverse"> <i class="fa fa-wallet"> </i> Return: <span class="text-secondary ret_amount">' + arett + ' USD</span></h6> ');
                            $('accountbalance').html(response.accountbalance);
                            var countDown = $('.timeleft').val;
                            console.log(response.time);
                            if (response.time == 1)
                            {
                                var timer2 = "0:30";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);

                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.00.30.00. ' + time334);

                                    }
                                    else{
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.00.30.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }
                            else if (response.time == 2)
                            {
                                var timer2 = "1:00";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');

                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.01.00.00. ' + time334);

                                    }
                                    else{
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.01.00.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }
                            else if (response.time == 3)
                            {
                                var timer2 = "2:00";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');

                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.02.00.00. ' + time334);

                                    }
                                    else{
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.02.00.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }
                            else if (response.time == 4)
                            {
                                var timer2 = "30:00";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');

                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.30.00.00. ' + time334);

                                    }
                                    else{
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.30.00.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }


                        }
                    }
                });
            }


        });
        // end btn buy

        // btn sell
        $('.btn-sell').on('click', function() {

            var balance = $('#txt_real').val();
            var amount = $('#txt_amount').val();

            if (amount > balance){
                $('#lowbalanceModal').modal('show');
            }
            else
            {
                anima();
                var user_id = $('#txt_userid').val();
                var data = {
					'user_id': $('#txt_userid').val(),
                    'stock_id': $('#txt_stockid').val(),
                    'trade_amount': $('#txt_amount').val(),
                    'duration': $('#duration').val(),
				}
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/user/trade/dcommit/" + user_id,
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        if(response.status == 400)
						{
                            $('#lowbalanceModal').modal('show');
						}
                        else
                        {
                            $('.accupdate').html('<a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Demo Account: <span class="accountbalance"> ' + response.rbalance +'</span> USD</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>' +

                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">'+
                                '<a class="dropdown-item" data-value="Demo Account:' + response.dbalance +' USD" href="javascript:void(0);">Demo Account: <span class="accountbalance"> ' + response.dbalance +' </span> USD</a>'+
                                '<a class="dropdown-item" data-value="Demo Account: ' + response.dbalance +' USD" href="javascript:void(0);">Demo Account: ' + response.dbalance +' USD</a>'+

                            '</div>');
                            var outcome = [
                                "0",
                                "0",
                                "0",
                                "1",
                                "0"
                            ];

                            var size= outcome.length;

                            var x = Math.floor(size * Math.random());
                            var winloss = outcome[x];

                            $('#txt_winloss').val (outcome[x]);
                            $('#txt_real').val (response.dbalance);
                            $('#txt_demo').val (response.dbalance);
                            $('accountbalance').html(response.accountbalance);
                            amount = parseInt(amount);
                            var rett = (amount / 100) * 30;
                            var arett = amount + rett;
                            $('.moneyret').html(' <h6 class="tx-inverse"> <i class="fa fa-wallet"> </i> Amount: <span class="text-secondary inv_amount">' + amount + ' USD</span></h6> ' +
                            ' <h6 class="tx-inverse"> <i class="fa fa-wallet"> </i> Return: <span class="text-secondary ret_amount">' + arett + ' USD</span></h6> ');

                            var countDown = $('.timeleft').val;
                            console.log(response.time);
                            if (response.time == 1)
                            {
                                var timer2 = "0:30";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');

                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.00.30.00. ' + time334);


                                    }
                                    else{
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.00.30.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }
                            else if (response.time == 2)
                            {
                                var timer2 = "1:00";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');
                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.01.00.00. ' + time334);


                                    }
                                    else{
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.01.00.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }
                            else if (response.time == 3)
                            {
                                var timer2 = "2:00";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');
                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.02.00.00. ' + time334);


                                    }
                                    else{
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.02.00.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }
                            else if (response.time == 4)
                            {
                                var timer2 = "30:00";
                                var interval = setInterval(function() {


                                var timer = timer2.split(':');
                                //by parsing integer, I avoid all extra string processing
                                var minutes = parseInt(timer[0], 10);
                                var seconds = parseInt(timer[1], 10);
                                --seconds;
                                minutes = (seconds < 0) ? --minutes : minutes;
                                if (minutes == 0 && seconds == 0)
                                {

                                    clearInterval(interval);
                                    // $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> 0 : 0 </span></h6>');
                                    if (winloss == 1)
                                    {
                                        $('#txt_result').val('loss');
                                        $('#lossModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.tradeduration').html('Duration: 00.30.00.00. ' + time334);


                                    }
                                    else{
                                        $('#txt_result').val('win');
                                        $('#winModal').modal('show');
                                        $('.amountstaked').html('$'+amount+'.00');
                                        $('.amountwon').html('$'+arett+'.00');
                                        $('.tradeduration').html('Duration: 00.30.00.00. ' + time334);

                                    }
                                    createhistory ();
                                }
                                seconds = (seconds < 0) ? 59 : seconds;
                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                //minutes = (minutes < 10) ?  minutes : minutes;
                                $('.timer').html('<h6 class="tx-inverse"> <i class="fa fa-stopwatch"> </i> Time Left: <Span class="text-secondary time_left"> ' + minutes + ':' + seconds + ' </span></h6>');
                                timer2 = minutes + ':' + seconds;
                                }, 1000);
                            }


                        }
                    }
                });
            }
        });
        // end btn sell
      });
  </script>




</body>
</html>
