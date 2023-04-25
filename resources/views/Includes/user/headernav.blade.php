<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
	<header class="header navbar navbar-expand-sm">

		<ul class="navbar-item theme-brand flex-row  text-center">
			<li class="nav-item theme-logo">
				<a href="{{url('/')}}">
					<img src="{{asset('user/assets/img/logo-3.png')}}" class="navbar-logo" alt="logo">
				</a>
			</li>
			<li class="nav-item theme-text">
				<a href="{{url('/')}}" class="nav-link"> Prologis<span style="font-size:14px;color:#1d958d;"><sup>trust<sup></span></a>
			</li>
		</ul>
    <div id="google_translate_element"></div>
		<ul class="navbar-item flex-row ml-md-auto">

			<li class="nav-item dropdown user-profile-dropdown">
				<a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					<img src="{{asset('storage/images/'.Auth::User()->image)}}" alt="avatar">
				</a>
				<div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
					<div class="">
						<div class="dropdown-item">
							<a class="" href="{{url('/user/profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> @lang('text.profile')</a>
						</div>
						<div class="dropdown-item">
							<a class="" href="{{url('/user/profile')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pocket"><path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline></svg> @lang('text.changePass')</a>
						</div>
						<div class="dropdown-item">
							<form method="POST" action="{{route('logout')}}">
								@csrf
							<a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> @lang('text.signOut')</a>
							
							</form>
						</div>
					</div>
				</div>
			</li>

		</ul>
	</header>
</div>
<!--  END NAVBAR  -->

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
							<li class="breadcrumb-item active" aria-current="page"><span>@yield('title')</span></li>
						</ol>
					</nav>

				</div>
			</li>
		</ul>
		<ul class="navbar-nav flex-row ml-auto ">
			<li class="nav-item more-dropdown">
				@if (Request::is('trade'))
					test
				@else
					<div class="dropdown  custom-dropdown-icon">
					<a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-primary" style="font-weight:bold;">@lang('text.bal')</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
						<a class="dropdown-item" data-value="{{Auth::User()->rbalance}} USD" href="javascript:void(0);">@lang('text.realAcc') <span class="accountbalance"> {{Auth::User()->rbalance}} </span> USD</a>
						<a class="dropdown-item" data-value="{{Auth::User()->dbalance}} USD" href="javascript:void(0);">@lang('text.demoAcc') {{Auth::User()->dbalance}} USD</a>
						
					</div>
				</div>
				@endif
				
			</li>
		</ul>
	</header>
</div>
<!--  END NAVBAR  -->