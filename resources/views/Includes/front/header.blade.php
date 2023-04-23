<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical in-header-home">
        <!-- module navigation begin -->
        <nav class="uk-navbar-container uk-navbar-transparent" data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left uk-width-auto">
                    <div class="uk-navbar-item">
                        <!-- module logo begin -->
                        <a class="uk-logo" href="index.html">
                            <img class="uk-margin-small-right in-offset-top-10" src="{{asset('front/img/logo.png')}}" data-src="{{asset('front/img/logo.png')}}" alt="logo" width="150" height="50">
                        </a>
                        <!-- module logo begin -->
                    </div>
                </div>
                <div class="uk-navbar-right uk-width-expand uk-flex uk-flex-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="#">Resources</a>
                        <li><a href="#">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                    </ul>
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{url('/login')}}" class="uk-button uk-button-text"><i class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                        <a href="{{url('/register')}}" class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- module navigation end -->
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-secondary uk-card-small uk-card-body uk-border-rounded">
                        <div class="uk-grid uk-text-small" data-uk-grid>
                            <div class="uk-width-3-4@m uk-visible@m">
                                <p>Trading involves substantial risk and may result in the loss of your invested/greater that your invested capital, respectively.</p>
                            </div>
                            <div class="uk-width-expand@m uk-text-center uk-text-right@m">
                                <a class="uk-margin-right" href="#"><i class="fas fa-comment-alt uk-margin-small-right"></i>Live Chat</a>
                                <a href="#"><i class="fas fa-phone-alt uk-margin-small-right uk-margin-small-left"></i>1-800-123-4567</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header content end -->
</header>