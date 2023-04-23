@extends('Layouts.user')

@section('title')
  User Dashboard
@endsection

@section('content')
			<div class="row layout-top-spacing">
				<style>
					p.w{
						font-size: 24px;
						font-weight: 600;
						margin-bottom: 0;
						align-self: center;
					}
					div.stat .widget-heading{
						height:120px;
					}
					@media only screen and (max-width: 600px){
						div.stat:nth-child(even){
							padding: 0 5px 0 15px;
						}
						div.stat:nth-child(odd){
							padding: 0 15px 0 5px;
						}
						p.w{
							font-size: 18px;
						}
					}
				</style>
				<div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
					<div class="widget widget-one_hybrid widget-engagement">
						<div class="widget-heading">
							<div class="w-title">
								<div class="w-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
								</div>
								<div class="">
									<p class="w">${{$total_capital}}</p>
									<h5 class="">Total Capital</h5>
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
								</div>
								<div class="">
									<p class="w">${{Auth::User()->profit}}</p>
									<h5 class="">Profit</h5>
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
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg></div>
								<div class="">
									<p class="w">${{sprintf('%.2f', Auth::User()->bonus)}}</p>
									<h5 class="">Referral Bonus</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-6 stat stat2 layout-spacing">
					<div class="widget widget-one_hybrid widget-referral">
						<div class="widget-heading">
							<div class="w-title">
								<div class="w-icon bg-secondary">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
								</div>
								<div class="">
									<p class="w">{{ count(Auth::user()->referrals)  ?? '0' }}</p>
									<h5 class="">Referral count</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
					<div class="widget widget-one_hybrid widget-referral">
						<div class="widget-heading">
							<div class="w-title">
								<div class="w-icon bg-secondary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
								</div>
								<div class="">
									<p class="w">{{count($investments)}}</p>
									<h5 class="">Total investments</h5>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-6 stat layout-spacing">
					<div class="widget widget-one_hybrid widget-engagement">
						<div class="widget-heading">
							<div class="w-title">
								<div class="w-icon bg-danger">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg>
								</div>
								<div class="">
									<p class="w">${{$total_withdraw}}</p>
									<h5 class="">Total Withdraws</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="row layout-top-spacing">
				@if ($invests != null)
				<div class="col-sm-12 col-md-12 layout-spacing">
					<div class="widget widget-table-two">

						<div class="widget-heading">
							<h5 class="">Active Investments</h5>
						</div>

						<div class="widget-content">
							<div class="table-responsive">
								<table class="table text-center">
									<thead>
										<tr>
											<th><div class="th-content">Plan</div></th>
											<th><div class="th-content">Capital</div></th>
											<th><div class="th-content">RIO</div></th>
											<th><div class="th-content">Daily profit</div></th>
											<th><div class="th-content">Started</div></th>
											<th><div class="th-content">Status</div></th>
											<th><div class="th-content">Time left</div></th>
										</tr>
									</thead>
									<tbody style="font-weight: bold;">
										@forelse ($invests as $investment)
											<tr>
												<td><div class="th-content">{{$investment->plan->name}}</div></td>
												<td><div class="th-content">$ {{$investment->amount}}</div></td>
												<td><div class="th-content">{{$investment->roi}}%</div></td>
												<td><div class="th-content">$ {{($investment->roi / 100) * $investment->amount}}</div></td>
												<td><div class="th-content">{{$investment->created_at}}</div></td>
												<td>
													<div class="th-content">
													@if ($investment->status == 'running')
													<span class="badge badge-success">Running</span>
													@elseif ($investment->status == 'pending')
													<span class="badge badge-warning">Pending</span>
													@else
													<span class="badge badge-danger">Cancelled</span>
													@endif
													</div>
												</td>
												<td><div class="th-content">{{$investment->time_left}} days</div></td>
											</tr>
										@empty
											<tr>
												<td class="col text-center" colspan="7">
													 No Investments yet
													 <br>
													 <br>
													 <a href="{{url('/user/invests/buy')}}" class="btn btn-outline-primary">Invest Now</a>

												</td>
											</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				@endif

				<div class="col-sm-12 col-md-6 layout-spacing">
					<div class="widget widget-one_hybrid widget-engagement">
						<div class="widget-heading">
						<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container">
							<div id="tradingview_1ad55"></div>
							<div class="tradingview-widget-copyright"><a href="" rel="noopener"><span class="blue-text">Market Cap</span></a> by TradingView</div>
							<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
							<script type="text/javascript">
							new TradingView.MediumWidget(
							{
							"symbols": [
								[
                                    "Prologis",
                                    "SWB:POJN|12M"
								],

							],
							"chartOnly": false,
							"width": "100%",
							"height": "350",
							"locale": "en",
							"colorTheme": "dark",
							"gridLineColor": "rgba(42 ,46, 57, 0)",
							"fontColor": "#787B86",
							"isTransparent": false,
							"autosize": true,
							"showFloatingTooltip": true,
							"scalePosition": "no",
							"scaleMode": "Normal",
							"fontFamily": "Trebuchet MS, sans-serif",
							"noTimeScale": false,
							"chartType": "area",
							"lineColor": "#2962FF",
							"bottomColor": "rgba(41, 98, 255, 0)",
							"topColor": "rgba(41, 98, 255, 0.3)",
							"container_id": "tradingview_1ad55"
							}
							);
							</script>
							</div>
							<!-- TradingView Widget END -->
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 layout-spacing">
					<div class="widget">
						<div class="widget-heading">
							<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container">

							  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
							  {
							  "symbol": "FX:EURUSD",
							  "width": "100%",
							  "height": "350",
							  "locale": "en",
							  "dateRange": "12M",
							  "colorTheme": "dark",
							  "trendLineColor": "rgba(41, 98, 255, 1)",
							  "underLineColor": "rgba(41, 98, 255, 0.3)",
							  "underLineBottomColor": "rgba(41, 98, 255, 0)",
							  "isTransparent": true,
							  "autosize": true,
							  "largeChartUrl": ""
							}
							  </script>
							</div>
							<!-- TradingView Widget END -->
						</div>
					</div>
				</div>
				<style>
					.list-group-item{
						background-color: #0e1726;
					}
					.same{
						height:260px;
					}
				</style>
				<div class="col-sm-12 col-md-6 layout-spacing same">
					<div class="widget">
						<div class="widget-heading">
							<h6>We are global</h6>
						<div id="chartdiv"></div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 layout-spacing same">
					<div class="widget">
						<h6>Countries</h6>
						{{-- <h6>Total Countries: {{ count($countires)}}</h6> --}}
						<div class="widget-heading" style="height: 150px; overflow-y:auto;">
						<ol class="list-group list-group-numbered bg-primary text-light">

						@foreach ($countires as $country)

						<li class="list-group-item d-flex justify-content-between align-items-start">
							<div class="ms-2 me-auto">
							<div class="fw-bold">{{$country}}</div>
							</div>
							<span class="badge bg-primary rounded-pill">{{$numbers[$num]}}</span>
							<!--{{$num++}}-->
						</li>
						@endforeach
						</ol>
						</div>
					</div>
				</div>

				<div class="col-12 layout-spacing">
					<div class="widget">
						<label for="link">Referral Link:</label>
						<div class="input-group pill-input-group">
							<input class="form-control" id="link" type="text" aria-label="Referral link" value="{{Auth::User()->referral_link}}" readonly> <button class="input-group-text btn btn-primary" role="button" value="{{Auth::User()->referral_link}}" onclick="myFunction(this.value)"> <i class="fas fa-copy"> </i> </button>
						</div>
					</div>
				</div>
			</div>
            <div class="mgm" style="display: none;">
                <div class="txt" style="color:white;"></div>
            </div>

@endsection

@section('script')
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.polygon.fillOpacity = 0.6;


// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

// Add image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.mapImages.template.tooltipText = "{title}";
imageSeries.mapImages.template.propertyFields.url = "url";

var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
circle.radius = 3;
circle.propertyFields.fill = "color";
circle.nonScaling = true;

var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
circle2.radius = 3;
circle2.propertyFields.fill = "color";


circle2.events.on("inited", function(event){
  animateBullet(event.target);
})


function animateBullet(circle) {
    var animation = circle.animate([{ property: "scale", from: 1 / chart.zoomLevel, to: 5 / chart.zoomLevel }, { property: "opacity", from: 1, to: 0 }], 800, am4core.ease.circleOut);
    animation.events.on("animationended", function(event){
      animateBullet(event.target.object);
    })
}

var colorSet = new am4core.ColorSet();

imageSeries.data = [ {
  "title": "Brussels",
  "latitude": 50.8371,
  "longitude": 4.3676,
  "color":colorSet.next()
}, {
  "title": "Copenhagen",
  "latitude": 55.6763,
  "longitude": 12.5681,
  "color":colorSet.next()
}, {
  "title": "Paris",
  "latitude": 48.8567,
  "longitude": 2.3510,
  "color":colorSet.next()
}, {
  "title": "Reykjavik",
  "latitude": 64.1353,
  "longitude": -21.8952,
  "color":colorSet.next()
}, {
  "title": "Moscow",
  "latitude": 55.7558,
  "longitude": 37.6176,
  "color":colorSet.next()
}, {
  "title": "Madrid",
  "latitude": 40.4167,
  "longitude": -3.7033,
  "color":colorSet.next()
}, {
  "title": "London",
  "latitude": 51.5002,
  "longitude": -0.1262,
  "url": "http://www.google.co.uk",
  "color":colorSet.next()
}, {
  "title": "Peking",
  "latitude": 39.9056,
  "longitude": 116.3958,
  "color":colorSet.next()
}, {
  "title": "New Delhi",
  "latitude": 28.6353,
  "longitude": 77.2250,
  "color":colorSet.next()
}, {
  "title": "Tokyo",
  "latitude": 35.6785,
  "longitude": 139.6823,
  "url": "http://www.google.co.jp",
  "color":colorSet.next()
}, {
  "title": "Ankara",
  "latitude": 39.9439,
  "longitude": 32.8560,
  "color":colorSet.next()
}, {
  "title": "Buenos Aires",
  "latitude": -34.6118,
  "longitude": -58.4173,
  "color":colorSet.next()
}, {
  "title": "Brasilia",
  "latitude": -15.7801,
  "longitude": -47.9292,
  "color":colorSet.next()
}, {
  "title": "Ottawa",
  "latitude": 45.4235,
  "longitude": -75.6979,
  "color":colorSet.next()
}, {
  "title": "Washington",
  "latitude": 38.8921,
  "longitude": -77.0241,
  "color":colorSet.next()
}, {
  "title": "Kinshasa",
  "latitude": -4.3369,
  "longitude": 15.3271,
  "color":colorSet.next()
}, {
  "title": "Cairo",
  "latitude": 30.0571,
  "longitude": 31.2272,
  "color":colorSet.next()
}, {
  "title": "Pretoria",
  "latitude": -25.7463,
  "longitude": 28.1876,
  "color":colorSet.next()
} ];



}); // end am4core.ready()
</script>
<script>
	$(document).ready(function () {
		$(document).on('click', '.logoutbtn', function(e) {
			e.preventDefault();

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				type: "POST",
				url: "/logout",
				data: "{{ csrf_token() }}",
				success: function (response) {

				}
			});
		});
	});
	function myFunction(address) {

		var TempText = document.createElement("input");
		TempText.value = address;
		document.body.appendChild(TempText);
		TempText.select();

		document.execCommand("copy");
		document.body.removeChild(TempText);

		alert("Referral link copied: " + address);
	}
</script>

<script type="text/javascript">

$(document).ready(function () {

    setTimeout(nextNotice, 15000);
    function nextNotice()
    {
        var numRand = Math.floor(Math.random() * 1010);
        var items = ['0.9', '10.5', '15', '1.9', '2', '5'];
        var doRand = items[Math.floor(Math.random() * items.length)];
        $.notify("  ID00"+numRand+" Just Earned $"+doRand, {align:"left", verticalAlign:"bottom", animation:true, animationType:"scale", blur: 0.2, icon:"map-marker-alt", color: "#009688", delay:5000});
        setTimeout(nextNotice, 15000);
    }
});

  </script>
@endsection
