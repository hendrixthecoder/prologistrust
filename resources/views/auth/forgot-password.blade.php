<!DOCTYPE html>
<html lang="eng" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#c3c3c3" />
    <!-- Site Properties -->
    <title> Forgot Password | Prologis Trust </title>
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
</head>
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_ff3bfb47dd90e0259739ddae4f802f4f5'
    });
</script>
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
                            <div class="uk-width-2-3@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="{{url('/')}}">
                                        <img class="uk-margin-small-right in-offset-top-10" src="{{asset('front/img/logo-2.png')}}" data-src="{{asset('front/img/logo.png')}}" alt="logo" width="150" height="50">
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-margin-top uk-margin-remove-bottom">@lang('text.forgotPassNoProb')</p>
                                    
                                    <br>

                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                        <br>
                                    @endif
                                    <form class="uk-grid uk-form" method="POST" action="{{ route('password.email') }}"> 
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <label for="email"> @lang('text.email') </label>
                                            <input class="uk-input uk-border-rounded" type="email" name="email" :value="old('email')" placeholder="" required autofocus />
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1">
                                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit">@lang('text.emailPassResLink')</button>
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
</body>

</html>
