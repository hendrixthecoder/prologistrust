<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>@yield('title') | Prologistrust</title>
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/owl.transitions.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('home/css/colors/color.css')}}"/>
	<link href="{{asset('front/css/vendors/venobox/venobox.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/vendors/aos/aos.js')}}">
    <link href="{{asset('front/css/vendors/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/css/tiny-slider.css')}}">
    
	<!-- <link rel="stylesheet" href="{{asset('home/css/theme-vendors.min.css')}}">
	<link rel="stylesheet" href="{{asset('home/css/theme.min.css')}}"> -->

	<!-- Favicon
	================================================== -->
	<link rel="icon" type="image/png" href="{{asset('home/img/logo-3.png')}}">

</head>
<script src="//code.tidio.co/y9htdw8dhkgu8arlgckfsqoz7gict9eu.js" async></script>
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

<body>

    <!-- Loader -->


    <!-- Nav and Logo
	================================================== -->
	@include('Includes.home.header')

    @yield('content')

    <!-- Footer -->
    @include('Includes.home.footer')

    <div class="scroll-to-top">to top</div>




	<!-- JAVASCRIPT
    ================================================== -->
	<!--<script src="{{asset('home/js/jquery-3.2.1.min.js')}}"></script>-->
	<script src="{{asset('home/js/popper.min.js')}}"></script>
	<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('home/js/plugins.js')}}"></script>
	<script src="{{asset('home/js/shape-svg.js')}}"></script>
	<script src="{{asset('home/js/chart-custom.js')}}"></script>
	<script src="{{asset('home/js/custom.js')}}"></script>
	<script src="{{asset('front/css/vendors/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('front/css/vendors/aos/aos.js')}}"></script>
    <script src="{{asset('front/css/vendors/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front/css/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('front/css/vendors/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/js/tiny-slider.js')}}"></script>
    <script src="{{asset('home/js/plugins.init.js')}}"></script>
	<!-- <script src="{{asset('home/js/theme-vendors.js')}}"></script>
	<script src="{{asset('home/js/theme.min.js')}}"></script> -->
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
	@yield('scripts')

<!-- End Document
================================================== -->

</body>
</html>
