<div class="section padding-top-big">
    <div class="background-parallax" style="background-image: url({{asset('home/img/parallax-5.jpg')}})" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
    <div class="container padding-bottom-big">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <h6 class="text-white mb-4">@lang('text.stayTuned')</h6>
                <div class="suscribe">
                    <input class="form-control text-left" placeholder="@lang('text.enterEmail')" type="text" name="name" />
                    <button type="submit" class="btn btn-primary m-0 js-tilt" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>@lang('text.sub')</span></button>
                </div>
                <p class="text-left text-white mb-0"><small>* @lang('text.promNoSpam')</small></p>
            </div>
            <div class="col-lg-5 mt-4">
                <ul class="footer-list">
                    <li class="text-left"><a href="{{url('/')}}">@lang('text.home')</a></li>
                    <li class="text-left"><a href="{{url('/about')}}">@lang('text.about')</a></li>
                    <li class="text-left"><a href="{{url('/contact')}}">@lang('text.contact')</a></li>
                    <li class="text-left"><a href="{{url('/login')}}">@lang('text.login')</a></li>
                    <li class="text-left"><a href="{{url('/register')}}">@lang('text.register')</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section py-4 background-dark-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 footer text-center text-lg-left">
                    <p>Copyright © 2021, Prologistrust. <i class="fa fa-code"></i> Powered by PAU DEV</p>
                </div>
                <div class="col-lg-6 footer mt-4 mr-auto mt-lg-0 mr-lg-0 text-center text-lg-right">
                   <p> All Rights Reserved. </p>
                </div>
            </div>
        </div>
    </div>
</div>