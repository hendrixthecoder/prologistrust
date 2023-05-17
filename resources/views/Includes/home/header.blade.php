<div id="menu-wrap" class="menu-back cbp-af-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light mx-lg-0">
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('home/img/logo-2.png')}}" alt="" height="45px" width="150px"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="menu-icon__line menu-icon__line-left"></span>
                            <span class="menu-icon__line"></span>
                            <span class="menu-icon__line menu-icon__line-right"></span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item use">
                                <a class="nav-link" style="color:black" href="{{url('/')}}">@lang('text.home')</a>
                                <!-- __mPS2id _mPS2id-h mPS2id-highlight mPS2id-highlight-first mPS2id-highlight-last -->
                            </li>
                            <li class="nav-item use">
                                <a class="nav-link" href="{{url('/about')}}">@lang('text.about')</a>
                            </li>
                            <li class="nav-item use">
                                <a class="nav-link" href="{{url('/contact')}}">@lang('text.contact')</a>
                            </li>
                            <li class="nav-item use">
                                <a class="nav-link" href="{{url('/login')}}">@lang('text.login')</a>
                            </li>
                            <li class="nav-item use">
                                <a class="nav-link" href="{{url('/register')}}">@lang('text.register')</a>
                            </li>
                            <li class="nav-item" id="ref">
                                <span class="nav-link">{{ Config::get('languages')[App::getLocale()] }}</span>
                                <ul class="collapse submenu list-unstyled" id="languages" data-parent="#accordionExample" style="display: none">
                                    @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <li>
                                            <a href="{{ route('setUserLocaleUnAuth', $lang) }}">{{ $language }}</a>
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="google_translate_element"></div>
                </nav>				
            </div>
        </div>
    </div>
</div>
<style>
    .nav-link {
        color:black;
    }

</style>

<script>
    $(document).ready(() => {
        $('#ref').on('click', () => {
            $('#languages').toggle()
        })
    })
</script>