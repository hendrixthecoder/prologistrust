<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title') | Prologis</title>
    <link rel="icon" href="{{asset('user/assets/img/logo-3.png')}}" type="image/x-icon">
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
    <link href="{{asset('user/plugins/pricing-table/css/component.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/forms/switches.css')}}">

    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/plugins/table/datatable/dt-global_style.css')}}">
    <!-- END PAGE LEVEL STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/forms/switches.css')}}">
    <link href="{{asset('user/plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css')}}" />
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link href="{{asset('user/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('user/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('user/notify/css/notify.css')}}">
    <!-- END PAGE LEVEL STYLES -->
    <!-- This line adds jquery to the page, otherwise the script tags at the bottom will not run -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Google Translate Element begin -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', includedLanguages: 'en,es,fr,pl,pt,zh-CN,zh-TW,ar,so,ru,hy,ko,vi',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style type="text/css">
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
        div#google_translate_element div.goog-te-gadget-simple {
            border: none;
            background-color: transparent;
            /*background-color: #17548d;*/ /*#e3e3ff*/
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
            text-decoration: none;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
            color: #aaa;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
            color: white;
        }
        
        .goog-te-gadget-icon {
            display: none !important;
            /*background: url("url for the icon") 0 0 no-repeat !important;*/
        }

        /* Remove the down arrow */
        /* when dropdown open */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(213, 213, 213);"] {
            display: none;
        }
        /* after clicked/touched */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(118, 118, 118);"] {
            display: none;
        }
        /* on page load (not yet touched or clicked) */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(155, 155, 155);"] {
            display: none;
        }

        /* Remove span with left border line | (next to the arrow) in Chrome & Firefox */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left: 1px solid rgb(187, 187, 187);"] {
            display: none;
        }
        /* Remove span with left border line | (next to the arrow) in Edge & IE11 */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
            display: none;
        }
        /* HIDE the google translate toolbar */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
    </style>
    <!-- Google Translate Element end -->
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

  @include('Includes.user.headernav')

  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">
      <div class="overlay"></div>
      <div class="search-overlay"></div>

      @include('Includes.user.sidebar')

      <!--  BEGIN CONTENT PART  -->
      <div id="content" class="main-content">
        <div class="layout-px-spacing">
          @yield('content')
        </div>
        @include('Includes.user.footer')
      </div>
      <!--  END CONTENT PART  -->
  </div>
  <!-- END MAIN CONTAINER -->



  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <!--<script src="{{asset('user/assets/js/libs/jquery-3.1.1.min.js')}}"></script>-->
  <script src="{{asset('user/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{asset('user/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('user/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('user/assets/js/app.js')}}"></script>
  <script src="{{asset('user/notify/js/notify.js')}}"></script>
  <script>
      $(document).ready(function() {
          App.init();
      });
  </script>
  <script src="{{asset('user/assets/js/custom.js')}}"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="{{asset('user/plugins/apex/apexcharts.min.js')}}"></script>
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
  <script src="{{asset('user/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('user/assets/js/apps/contact.js')}}"></script>
  <!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
<script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
 <script>
        $('document').ready(function () {
            $('#google_translate_element').on("click", function () {

                // Change font family and color
                $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div") //, .goog-te-menu2 *
                .css({
                    'color': '#544F4B',
                    'background-color': '#e3e3ff',
                    'font-family': '"Open Sans",Helvetica,Arial,sans-serif'
                });

                // Change hover effects  #e3e3ff = white
                $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
                    $(this).css('background-color', '#17548d').find('span.text').css('color', '#e3e3ff');
                }, function () {
                    $(this).css('background-color', '#e3e3ff').find('span.text').css('color', '#544F4B');
                });

                // Change Google's default blue border
                $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #17548d');

                $("iframe").contents().find('.goog-te-menu2').css('background-color', '#e3e3ff');

                // Change the iframe's box shadow
                $(".goog-te-menu-frame").css({
                    '-moz-box-shadow': '0 3px 8px 2px #666666',
                    '-webkit-box-shadow': '0 3px 8px 2px #666',
                    'box-shadow': '0 3px 8px 2px #666'
                });
            });
        });
    </script>

  @yield('script')
</body>
</html>
