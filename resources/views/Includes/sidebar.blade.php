<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="{{url('/')}}"><img class="img-fluid for-light" width="150px" height="50px" src="{{asset('dashboard/assets/images/logo/logo-2.png')}}" alt=""><img class="img-fluid for-dark" width="150px" height="60px" src="{{asset('dashboard/assets/images/logo/logo.png')}}" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{url('/')}}"><img class="img-fluid" width="35px" height="35px" src="{{asset('dashboard/assets/images/logo/logo-3.png')}}" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="{{url('/')}}"><img class="img-fluid" width="35px" height="35px" src="{{asset('dashboard/assets/images/logo/logo-3.png')}}" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="">GENERAL</h6>
                      <p class="">Dashboard, Users & Trade Reports...</p>
                    </div>
                  </li>

                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin/dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a>
                  </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="users"></i><span>Manage Users</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{url('admin/users/adduser')}}">Add User </a></li>
                      <li><a href="{{url('admin/users')}}">All Users </a></li>
                      <li><a href="{{url('admin/users/verified')}}">Verified Users </a></li>
                      <li><a href="{{url('admin/users/unverified')}}">Unverified Users </a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/settings/crypto_list')}}"><i data-feather="cpu"></i><span>Crypto Currency</span></a></li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/settings/trade_settings')}}"><i data-feather="list"></i><span>Trade Settings</span></a></li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="feather"></i><span>Demo Trade</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('admin/trade/demotrade/log')}}">All </a></li>
                            <li><a href="{{url('admin/trade/demotrade/log/win')}}">Winning </a></li>
                            <li><a href="{{url('admin/trade/demotrade/log/lose')}}">Losing </a></li>
                            <li><a href="{{url('admin/trade/demotrade/log/draw')}}">Draw </a></li>
                            </ul>
                  </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="server"> </i><span>Trade Log</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('admin/trade/log')}}">All </a></li>
                            <li><a href="{{url('admin/trade/log/win')}}">Winning </a></li>
                            <li><a href="{{url('admin/trade/log/lose')}}">Losing </a></li>
                            <li><a href="{{url('admin/trade/log/draw')}}">Draw </a></li>
                        </ul>
                 </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="activity"> </i><span>Plans</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('admin/plans')}}">Plans </a></li>
                            <li><a href="{{url('admin/userplans')}}"> User Plans </a></li>
                        </ul>
                 </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="credit-card"></i><span>Payment Gateways</span></a>
                  <ul class="sidebar-submenu">
                            <li><a href="#"> Automatic Gateways </a></li>
                            <li><a href="{{url('/admin/gateway/manual')}}">Manual Gateways </a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="dollar-sign"></i><span>Deposit</span></a>
                     <ul class="sidebar-submenu">
                            <li><a href="{{url('admin/deposit/log')}}">All Deposit </a></li>
                            <li><a href="{{url('admin/deposit/pending')}}">Pending Deposit </a></li>
                            <li><a href="{{url('admin/deposit/approved')}}">Approved Deposit </a></li>
                            <li><a href="{{url('admin/deposit/rejected')}}">Rejected Deposit </a></li>
                    </ul>
                </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="credit-card"></i><span>Withdrawal</span></a>
                           <ul class="sidebar-submenu">
                                    <li><a href="{{url('admin/withdrawals/methods')}}">Withdrawal Methods </a></li>
                                    <li><a href="{{url('admin/withdraw/log')}}">All Withdrawal </a></li>
                                    <li><a href="{{url('admin/withdraw/pending')}}">Pending Withdrawal </a></li>
                                    <li><a href="{{url('admin/withdraw/approved')}}">Approved Withdrawal </a></li>
                                    <li><a href="{{url('admin/withdraw/rejected')}}">Rejected Withdrawal </a></li>
                            </ul>
                 </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="edit-3"></i><span>Reports</span></a>
                         <ul class="sidebar-submenu">
                            <li><a href="{{url('admin/transaction/log')}}">Transaction History </a></li>
                            <li><a href="#">Login History </a></li>
                        </ul>
                  </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="thumbs-up"></i><span>Subscribers</span></a> </li>

                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="">SETTINGS</h6>
                      <p class="">Manage Site Settings...</p>
                    </div>
                  </li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/settings/site_settings')}}"><i data-feather="settings"></i><span>Site Settings</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{url('admin/settings/logo_settings')}}"><i data-feather="edit"></i><span>Logo/Icon Settings</span></a></li>

                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="mail"></i><span>Email Manager</span></a>
                         <ul class="sidebar-submenu">
                            <li><a href="{{url('admin/emailalluser')}}">Email All Users</a></li>
                            <li><a href="#">Email One User </a></li>
                        </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="log-out"></i><span>Log Out</span></a></li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>

        <!-- Page Sidebar Ends-->
