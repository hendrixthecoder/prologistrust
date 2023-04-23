@extends('Layouts.user')

@section('title')
  Trade Now
@endsection

@section('content')
<div class="row layout-top-spacing d-flex">
          <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
              <div class="widget-heading">
                <div class="w-title">
                  <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                  </div>
                  <div class="">
                    <p class="w">$ {{Auth::User()->dbalance}}</p>
                    <h5 class="">Demo Balance</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
              <div class="widget-heading">
                <div class="w-title">
                  <div class="w-icon bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                  </div>
                  <div class="">
                    <p class="w">$ {{Auth::User()->rbalance}}</p>
                    <h5 class="">Real Balance</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
              <div class="widget-heading">
                <div class="w-title">
                  <div class="w-icon bg-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                  </div>
                  <div class="">
                    <p class="w">{{ $total_trades }}</p>
                    <h5 class="">Total Trades</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-6 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
              <div class="widget-heading">
                <div class="w-title">
                  <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                  </div>
                  <div class="">
                    <p class="w"> {{ count($won_trades) }}</p>
                    <h5 class="">Won Trades</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-12 stat layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
              <div class="widget-heading">
                <div class="w-title">
                  <div class="w-icon bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                  </div>
                  <div class="">
                    <p class="w"> {{ count($lose_trades)}}</p>
                    <h5 class="">Lost Trades</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

     <div class="row">
            <div class="col-xl-12 col-sm-12 col-md-12 text-center">
                              <!-- TradingView Widget BEGIN -->
                          <div class="tradingview-widget-container">

                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                            {
                            "width": "100%",
                            "height": "350",
                            "currencies": [
                              "EUR",
                              "USD",
                              "JPY",
                              "GBP",
                              "CHF",
                              "AUD",
                              "CAD",
                              "NZD",
                              "CNY"
                            ],
                            "isTransparent": false,
                            "colorTheme": "dark",
                            "locale": "en"
                          }
                            </script>
                          </div>
                          <!-- TradingView Widget END -->
            </div>
        </div>


      <div class="row layout-top-spacing">
        <div class="col-sm-12 col-md-12 layout-spacing">
					<div class="widget widget-table-two">

						<div class="widget-heading">
							<h5 class="">Trade History</h5>
              <div class="float-right navbar-nav flex-row ml-auto ">
                <a href="{{url('/user/trade/asset/1')}}" class="btn btn-outline-primary">Trade Now</a>
              </div>
						</div>

						<div class="widget-content">
							<div class="table-responsive">
								<table class="table text-center">
                  <thead>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>In time</th>
                        <th>Status</th>
                    </tr>
                </thead>
									<tbody style="font-weight: bold;">
                    @forelse ($records as $record)
                    <tr>
                       <td>{{ Carbon\Carbon::parse($record->updated_at)->format('d/m/Y') }}</td>

                       <td>{{$record->amount}}</td>

                       @if ($record->in_time == 1)
                         <td> 30seconds </td>

                       @elseif($record->in_time == 2)
                         <td> 1minutes </td>

                       @elseif($record->in_time == 3)
                          <td> 2minutues </td>

                       @else
                          <td> 3minutues </td>
                       @endif

                       @if ($record->status == 'win')
                         <td><span class="shadow-none badge badge-success">{{$record->status}}</span></td>
                       @else
                         <td><span class="shadow-none badge badge-danger">{{$record->status}}</span></td>
                       @endif

                    </tr>

                    @empty
                    <td colspan="4"> No Trades History </td>
                @endforelse
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>


    </div>


@endsection

@section('scripts')

@endsection
