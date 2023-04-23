<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#c3c3c3" />
    <!-- Site Properties -->
    <title> Verify Email | Prologis Trust </title>
    <!-- Critical preload -->
    <link rel="preload" href="{{asset('front/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{asset('front/css/vendors/uikit.min.css')}}" as="style">
    <link rel="preload" href="{{asset('front/css/style.css')}}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{asset('front/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('front/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="{{asset('front/fonts/rubik-v9-latin-500.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('front/fonts/rubik-v9-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('front/fonts/rubik-v9-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="icon" href="{{asset('front/img/logo-3.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front/apple-touch-icon.png')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('front/css/vendors/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
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
<div id="google_translate_element" class="uk-input uk-border-rounded" style="color:black;"></div>
<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-expand@m uk-flex uk-flex-middle uk-flex-center">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-1-2@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="{{url('/')}}">
                                        <img class="uk-margin-small-right in-offset-top-10" src="{{asset('front/img/logo-2.png')}}" data-src="{{asset('front/img/logo.png')}}" alt="logo" width="150" height="50">
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-margin-top uk-margin-remove-bottom">Verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another</p>
                                    
                                    <br>
                                    @if (session('message') == 'Verification link sent!')
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            <p style="color: red;">A new verification link has been sent to the email address you provided during registration.</p>
                                        </div>
                                        <br>
                                    @endif
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('verification.send') }}"> 
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit">Resend Verification Email</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="{{asset('front/js/vendors/uikit.min.js')}}"></script>
    <script src="{{asset('front/js/vendors/indonez.min.js')}}"></script>
    <script src="{{asset('front/js/config-theme.js')}}"></script>
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
</body>

</html>

