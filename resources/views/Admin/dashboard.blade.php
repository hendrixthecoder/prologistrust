@extends('Layouts.master')

@section('title')
    Admin Dashboard | Prologis
@endsection

@section('content')

<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Dashboard</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">  <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="users"></i></div>
                      <div class="media-body"><span class="m-0">Total Users</span>
                        <h4 class="mb-0 counter">{{$widget['total_users']}}</h4><i class="icon-bg" data-feather="users"></i>
                      </div>
                    </div>  
                    <div class="align-self-center text-center"><a href="{{ url('/admin/users')}}" class="btn btn-pill btn-secondary float-right"> View All </a></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="database"></i></div>
                      <div class="media-body"><span class="m-0">Total Trades</span>
                        <h4 class="mb-0 counter">{{$widget['total_trades']}}</h4><i class="icon-bg" data-feather="database"></i>
                      </div>
                    </div>
                    <div class="align-self-center text-center"><a href="{{ url ('/admin/trade/log') }}" class="btn btn-pill btn-primary"> View All </a></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="server"></i></div>
                      <div class="media-body"><span class="m-0">Won Trades</span>
                        <h4 class="mb-0 counter">{{$widget['won_trades']}}</h4><i class="icon-bg" data-feather="server"></i>
                      </div>
                    </div>
                    <div class="align-self-center text-center"><a href="{{ url ('/admin/trade/log/win') }}" class="btn btn-pill btn-secondary"> View All </a></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="server"></i></div>
                      <div class="media-body"><span class="m-0">Lost Trades</span>
                        <h4 class="mb-0 counter">{{$widget['lose_trades']}}</h4><i class="icon-bg" data-feather="server"></i>
                      </div>
                    </div>
                    <div class="align-self-center text-center"><a href="{{ url ('/admin/trade/log/lose') }}" class="btn btn-pill btn-primary"> View All </a></div>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="dollar-sign"></i></div>
                      <div class="media-body"><span class="m-0">Total Deposits</span>
                        <h4 class="mb-0 counter">{{$widget['total_deposits']}}</h4><i class="icon-bg" data-feather="dollar-sign"></i>
                      </div>
                    </div>  
                    <div class="align-self-center text-center"><a href="{{ url ('admin/deposit/log')}}" class="btn btn-pill btn-primary float-right"> View All </a></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="credit-card"></i></div>
                      <div class="media-body"><span class="m-0">Total Withdrawals</span>
                        <h4 class="mb-0 counter">{{$widget['total_withdrawals']}}</h4><i class="icon-bg" data-feather="credit-card"></i>
                      </div>
                    </div>
                    <div class="align-self-center text-center"><a href="{{url ('/admin/withdraw/log')}}" class="btn btn-pill btn-secondary"> View All </a></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="dollar-sign"></i></div>
                      <div class="media-body"><span class="m-0">Pending Deposits</span>
                        <h4 class="mb-0 counter">{{$widget['pending_deposits']}}</h4><i class="icon-bg" data-feather="dollar-sign"></i>
                      </div>
                    </div>
                    <div class="align-self-center text-center"><a href="{{ url('/admin/deposit/pending') }}" class="btn btn-pill btn-primary"> View All </a></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="credit-card"></i></div>
                      <div class="media-body"><span class="m-0">Pending Witdrawal</span>
                        <h4 class="mb-0 counter">{{$widget['pending_withdrawals']}}</h4><i class="icon-bg" data-feather="credit-card"></i>
                      </div>
                    </div>
                    <div class="align-self-center text-center"><a href="{{ url ('/admin/withdraw/pending') }}" class="btn btn-pill btn-secondary"> View All </a></div>
                  </div>
                </div>
              </div>

            </div>

        

          <!-- Container-fluid Ends-->
</div>
@endsection
@section('scripts')
    
@endsection
