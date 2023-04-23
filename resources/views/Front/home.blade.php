@extends('Layouts.home')

@section('title')
    Home
@endsection

@section('content')

<style>
	/*===================================*
	 START TESTIMONIAL
	*====================================*/
	.carousel-inner .carousel-item .img-box{
		width: 135px;
		height: 135px;
	}
	.carousel-control-prev{
		left: -90px;
	}
	.carousel-control-next{
		right: -90px;
	}
	.carousel-indicators{
		top: 350px;
	}
	@media (min-width: 320px) and (max-width: 640px) {
		.carousel-inner .carousel-item p{
			font-size: 14px;
		}
		.carousel-control-prev{
			left: -30px;
		}
		.carousel-control-next{
			right: -30px;
		}
		 .carousel-indicators{
			top: 420px;
		}
	}
	/*===================================*
	END TESTIMONIAL
	*====================================*/
	#image{
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
	}

	#overlay {
		position: absolute;
		content:"";
		top:0;
		left:0;
		width:100%;
		height:100%;
		z-index:4;
		background-color: rgba(0,0,0,0.55);
	}
	#text-layer{
		position: absolute;
		width: 100%;
		height: 20%;
		top: 40%;
		z-index: 8;
	}

	/* ADD CURSOR */
.txt-type > .txt {
  border-right: 0.08rem solid #fff;
  padding-right: 2px;
  /* Animating the cursor */
  animation: blink 0.6s infinite;
}

/* ANIMATION */
@keyframes blink {
  0% {
    border-right: 0.08rem solid rgba(255, 255, 255, 1);
  }
  100% {
    border-right: 0.08rem solid rgba(255, 255, 255, 0.2);
  }
}

	</style>


    <!-- Primary Page Layout
	================================================== -->
    <div class="section big-85-height" id="image" data-image1="{{asset('home/img/tree4.jpg')}}" data-image2="{{asset('home/img/tree3.jpg')}}">
		<div class="background-path">
			<svg class="scene" preserveAspectRatio="none" viewBox="0 0 1440 800" >
				<path d="M -84.52,-81.13 C -94.62,-73.4 -88.88,-59.55 -90.33,-48.91 -89.29,27.31 -89.61,103.5 -88.33,179.8 -85.99,416.1 -81.32,888.9 -81.32,888.9 -81.32,888.9 974.5,888.7 1587,891.9 1518,719.9 1487,644 1429,533 1388,437.7 1447,259.7 1400,187 1362,132 1270,90.53 1207,39.93 1161,2.932 1071,-74.45 1071,-74.45 1071,-74.45 914.5,-77.77 848.2,-80.17 537.6,-80.84 227,-81.38 -83.6,-81.6 -83.91,-81.44 -84.21,-81.29 -84.52,-81.13 Z" class="M -84.52,-81.13 C -94.62,-73.4 -88.88,-59.55 -90.33,-48.91 -89.29,27.31 -89.61,103.5 -88.33,179.8 -85.99,416.1 -81.32,888.9 -81.32,888.9 -81.32,888.9 974.5,888.7 1587,891.9 1576,704.7 1517,625.7 1459,514.7 1418,419.4 1430,288.5 1382,187 1349,116.3 1296,54.47 1240,0.3429 1205,-33.51 1120,-83.59 1120,-83.59 1120,-83.59 914.5,-77.77 848.2,-80.17 537.6,-80.84 227,-81.38 -83.6,-81.6 -83.91,-81.44 -84.21,-81.29 -84.52,-81.13 Z"></path>
				<path d="M 665.2,-83.08 C 413.7,-81.89 162.2,-82.43 -89.29,-81.61 -90.35,164.3 -85.06,410.2 -84.09,656.1 -83.37,733.7 -82.64,811.3 -81.92,888.9 442.4,889.8 966.7,890.7 1491,891.6 1253,747.5 1417,429.4 1286,245.4 1227,163.2 1107,142.1 1043,64.54 1009,24.41 973,-76.01 973,-76.01 973,-76.01 706.6,-83.67 665.2,-83.08 Z" class="M 665.2,-83.08 C 413.7,-81.89 162.2,-82.43 -89.29,-81.61 -90.35,164.3 -85.06,410.2 -84.09,656.1 -83.37,733.7 -82.64,811.3 -81.92,888.9 442.4,889.8 966.7,890.7 1491,891.6 1253,747.5 1349,460.4 1243,260.6 1199,176.6 1145,96.92 1083,24.95 1050,-12.63 973,-76.01 973,-76.01 973,-76.01 706.6,-83.67 665.2,-83.08 Z"></path>
				<path d="M -85.01,-74.02 C -92.39,-66.64 -85.37,-55.79 -87.81,-46.91 -86.65,265.1 -84.66,577.2 -83.18,889.2 317.2,888.3 717.5,885.8 1118,890.4 1152,890.6 1187,890.9 1221,890 1219,768.3 1224,643.6 1187,526 1153,417 1091,319.3 1029,224.1 998.8,178.5 968.8,132.6 936.6,88.23 891.7,27.39 772.2,-78.96 772.2,-78.96 772.2,-78.96 222.1,-81.07 -85.01,-74.02 Z" class="M -85.01,-74.02 C -92.39,-66.64 -85.37,-55.79 -87.81,-46.91 -86.65,265.1 -84.66,577.2 -83.18,889.2 317.2,888.3 717.5,885.8 1118,890.4 1152,890.6 1187,890.9 1221,890 1219,768.3 1175,659.3 1150,544.3 1128,438.4 1143,312.6 1081,227.1 1004,121.1 925.8,114.8 851.3,54.73 762,-17.34 772.2,-78.96 772.2,-78.96 772.2,-78.96 222.1,-81.07 -85.01,-74.02 Z"></path>
				<path d="M -92.42,-79.11 C -89.97,243.8 -87.52,566.7 -85.07,889.6 201.8,889.9 488.7,889.9 775.5,895.6 880.4,896.9 985.2,894 1090,892.5 1064,773.3 1037,651.6 976.1,544.8 946.7,495.8 914.6,448.3 882,401.3 820.9,314.4 742.3,252 666.4,177.4 583.2,98.01 496.5,12.18 386.7,-23.38 328.4,-45.64 232.6,-81.38 232.6,-81.38 232.6,-81.38 9.82,-84.94 -92.42,-79.11 Z" class="M -92.42,-79.11 C -89.97,243.8 -87.52,566.7 -85.07,889.6 201.8,889.9 488.7,889.9 775.5,895.6 880.4,896.9 1063,889.5 1063,889.5 1063,889.5 1081,768.2 997.4,608.7 958.5,534.8 969.9,436.8 918.5,370.8 848.4,280.8 717,260.3 629.9,186.5 552.6,121.2 491.5,38.73 426.3,-38.61 412.9,-54.44 387.9,-87.47 387.9,-87.47 387.9,-87.47 9.82,-84.94 -92.42,-79.11 Z"></path>
				<path d="M -88.6,95.54 C -90.38,166.1 -88.23,236.7 -88.68,307.4 L -86.19,890 C 229.7,890.2 939.8,892.4 939.8,892.4 855.2,767 831,639.4 721.4,519.4 634.7,424.5 526.4,360.9 428.8,281.8 332.7,204 251.6,102.3 140.1,48.9 70.75,15.73 -24.82,24.2 -85.28,0.03 Z" class="M -88.6,95.54 C -90.38,166.1 -88.23,236.7 -88.68,307.4 L -86.19,890 C 229.7,890.2 939.8,892.4 939.8,892.4 906.9,734.7 779.3,676 721.4,519.4 676.8,398.8 566.5,307.1 458.9,236.6 355.2,168.7 220.3,165.7 107.8,113.5 40.05,82.12 -24.82,24.2 -85.28,0.03 Z"></path>
				<path d="M -95.69,252.3 -87.65,890.4 698.1,892 C 698.1,892 599.1,687.7 518.9,610.6 348,446.2 131.4,466.5 -95.69,252.3 Z" class="M -95.69,252.3 -87.65,890.4 698.1,892 C 698.1,892 569.8,587.1 448.9,482.7 299.7,353.9 131.4,466.5 -95.69,252.3 Z"></path>
				<path d="M -85.59,444.4 -85.59,890.6 489,895.6 C 489,895.6 436.8,745.3 382.5,690.8 258.1,565.8 57.98,629.2 -85.59,444.4 Z" class="M -85.59,444.4 -85.59,890.6 546.9,895.6 C 546.9,895.6 517.4,695.4 339.9,593.4 187.7,505.9 57.98,629.2 -85.59,444.4 Z"></path>
			</svg>
		</div>
		<div class="hero-center-wrap" id="text-layer">
			<div class="container">
				<div class="row" style="z-index: 8; color:#fff; font-weight:bold;">
					<div class="col-md-12 text-center parallax-fade-top">
						<h1 style="color:#f5f5f5;">PROLOGIS <br><span class="txt-type" data-wait="3000" data-words='["(Ahead of Whats Next)"]'>(Ahead of What's Next)</span></h1>
					</div>
                    <div class="col-md-12 text-center mb-1 parallax-fade-top">
						<p>We are here to offer you the best because your success is our success.</p>
					</div>
					<div class="col-md-12 text-center mt-4 mt-lg-5 parallax-fade-top">
						<a style="width: 115px;" class="btn btn-primary js-tilt" href="{{url('/login')}}" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Login</span></a>
						<a style="width: 115px; background-color:white; color:#424242;" class="btn js-tilt" href="{{url('/register')}}" data-gal="m_PageScroll2id" data-ps2id-offset="68" role="button" data-tilt-perspective="300" data-tilt-speed="700" data-tilt-max="24"><span>Register</span></a>
					</div>
				</div>
			</div>
		</div>
		<div id="overlay"></div>
	</div>

    <div class="section mt-5 mb-1" id="app">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<h3 style="color:#005e33">Who we are</h3>
						<p>We strive to be exemplary corporate citizens, minimize our environmental impacts, and maximize beneficial outcomes for our stakeholders.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 mt-2 align-self-center" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<h4 style="color:#005e33">Why choose us</h4>
					<p class="lead">When you trade and invest in prologistrust, you are dealing with the prologis stock market.</p>
					<ul class="app-list mt-1">
						<li>Prologis day to day transactions</li>
						<li>Buying and selling of land and properties</li>
						<li>The rise and Fall of prologis stock/holding and selling shares</li>
						<li>Building and renting of apartment by a real estate agent</li>
						<li>Daily compensation from the prologis warehouses and event centres, airport e.t.c.</li>
					</ul>

				</div>
				<div class="col-md-6 order-first order-md-last mb-2 mb-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="video-section video-shadow">
						<figure class="vimeo">
							<a href="https://player.vimeo.com/video/634429822?h=e4218c4f0f">
								<img src="{{asset('home/img/porlogis_13.png')}}" alt="image"/>
							</a>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="section padding-top-bottom-big" id="concept" style="background: linear-gradient(286deg, rgba(24, 146, 191, 0.9) 1%, rgba(29, 149, 141, 0.9) 78%);">

		<div class="container mb-5">
            <div class="col-md-12">
                <div class="title-wrap text-center">
                    <div class="back-title">Goal</div>
                    <h3 style="color:#fff">Our Goal</h3>
                    <p style="color:#fff">We strive to be exemplary corporate citizens, minimize our environmental impacts, and maximize beneficial outcomes for our stakeholders.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 ">
                    <div class="tiny-four-item text-center">
                        <div class="tiny-slide">
                            <a href="javascript:void(0);" class="customer-testi text-center" style="text-decoration: none;">

                                    <div class="mb-4">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72" height="72" x="0px" y="0px"
	 viewBox="0 0 56 56" style="enable-background:new 0 0 56 56;" xml:space="preserve">
<g>
	<rect x="38" y="28" style="fill:#FFFFFF;" width="16" height="2"/>
	<circle style="fill:#FFFFFF;" cx="28" cy="29.708" r="1"/>
	<rect x="38" y="52" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="38" y="48" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="38" y="32" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="38" y="44" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="38" y="40" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="38" y="36" style="fill:#FFFFFF;" width="16" height="2"/>
	<path style="fill:#66CEDB;" d="M36,30.708v-4V26H20v8h16V30.708z M28,32.708c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3
		S29.654,32.708,28,32.708z"/>
	<rect x="20" y="48" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="2" y="52" style="fill:#FFFFFF;" width="16" height="2"/>
	<circle style="fill:#FFFFFF;" cx="10" cy="41.708" r="1"/>
	<path style="fill:#66CEDB;" d="M18,42.708v-4V38H2v8h16V42.708z M10,44.708c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3
		S11.654,44.708,10,44.708z"/>
	<rect x="2" y="48" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="20" y="44" style="fill:#FFFFFF;" width="16" height="2"/>
	<rect x="20" y="40" style="fill:#FFFFFF;" width="16" height="2"/>
	<polygon style="fill:#FFFFFF;" points="36,36 20,36 20,36.708 20,38 36,38 	"/>
	<rect x="20" y="52" style="fill:#FFFFFF;" width="16" height="2"/>
	<polygon style="fill:#FFFFFF;" points="54,24 38,24 38,24.708 38,26 54,26 	"/>
	<circle style="fill:#FFFFFF;" cx="46" cy="17.708" r="1"/>
	<path style="fill:#66CEDB;" d="M54,14H38v8h16V14z M46,20.708c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3
		S47.654,20.708,46,20.708z"/>
	<g>
		<path d="M55,12H37c-0.553,0-1,0.155-1,0.708v10V24H19c-0.553,0-1,0.155-1,0.708v10V36H1c-0.553,0-1,0.155-1,0.708v10v4v4
			C0,55.26,0.447,56,1,56h18h18h18c0.553,0,1-0.74,1-1.292v-4v-4v-4v-4v-4v-4v-4v-4v-10C56,12.155,55.553,12,55,12z M38,14h16v8H38
			V14z M2,48h16v2H2V48z M20,44h16v2H20V44z M20,40h16v2H20V40z M36,38H20v-1.292V36h16V38z M20,48h16v2H20V48z M38,48h16v2H38V48z
			 M38,44h16v2H38V44z M38,40h16v2H38V40z M38,36h16v2H38V36z M38,32h16v2H38V32z M38,28h16v2H38V28z M38,24.708V24h16v2H38V24.708z
			 M20,26h16v0.708v4V34H20V26z M2,38h16v0.708v4V46H2V38z M2,52h16v2H2V52z M20,52h16v2H20V52z M38,54v-2h16v2H38z"/>
		<path d="M10,38.708c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S11.654,38.708,10,38.708z M10,42.708c-0.552,0-1-0.449-1-1
			s0.448-1,1-1s1,0.449,1,1S10.552,42.708,10,42.708z"/>
		<path d="M28,26.708c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S29.654,26.708,28,26.708z M28,30.708c-0.552,0-1-0.449-1-1
			s0.448-1,1-1s1,0.449,1,1S28.552,30.708,28,30.708z"/>
		<path d="M46,14.708c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3C49,16.053,47.654,14.708,46,14.708z M46,18.708
			c-0.552,0-1-0.449-1-1s0.448-1,1-1s1,0.449,1,1S46.552,18.708,46,18.708z"/>
		<path d="M19,12.122l5.293,5.293c0.391,0.391,1.023,0.391,1.414,0L40,3.122V6h2V0.707C42,0.155,41.553,0,41,0h-5v2h2.586L25,15.44
			l-5.293-5.366c-0.391-0.391-1.023-0.427-1.414-0.037l-18,17.982l1.414,1.405L19,12.122z"/>
	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                                        </div>
                                        <h5 style="color: #fff">Independent</h5>
                                        <p style="color: #fff">Our mobility concept enables super-simple transportation and worldwide deployment.</p>

                            </a>
                        </div>

                        <div class="tiny-slide">
                            <a href="javascript:void(0);" class="customer-testi text-center" style="text-decoration: none;">
                                <div class="mb-4">
                                    <svg width="72" height="72" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke="#000" stroke-width="2" d="M2,8 C2,8 5.5,9 7,10 C8.5,11 7.56437103,12.4191614 8,13 C8.43562897,13.5808386 10,12 10,15 C10,18 13,16 13,19 C13,22 15.5,21.5 16,20 C16.5,18.5 18.2333023,16.8664183 18,15 C17.7666977,13.1335817 17,12 15,12 C13,12 11.5,11.5 11,10 C10.5,8.5 14,8 13,5 C12,2 13,1 13,1 M23,12 C23,18.075 18.075,23 12,23 C5.925,23 1,18.075 1,12 C1,5.925 5.925,1 12,1 C18.075,1 23,5.925 23,12 L23,12 Z"/>
                                      </svg>
                                    </div>
                                    <h5 style="color: #fff">Fully Scalable</h5>
                                    <p style="color: #fff">Mobile and efficient low-cost hardware and optimized propietary management.</p>
                            </a>
                        </div>

                        <div class="tiny-slide">
                            <a href="javascript:void(0);" class="customer-testi text-center" style="text-decoration: none;">
                                <div class="mb-4">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72" height="72" x="0px" y="0px"
	 viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M440,450V100c0-5.522-4.477-10-10-10h-70c-5.523,0-10,4.478-10,10v350h-10V190c0-5.522-4.477-10-10-10h-70
				c-5.523,0-10,4.478-10,10v260h-10V250c0-5.522-4.477-10-10-10h-70c-5.523,0-10,4.478-10,10v200h-10V320c0-5.522-4.477-10-10-10
				H60c-5.523,0-10,4.478-10,10v130H0v20h490v-20H440z M120,450H70v-75h50V450z M120,355H70v-25h50V355z M220,450h-50V305h50V450z
				 M220,285h-50v-25h50V285z M320,450h-50V245h50V450z M320,225h-50v-25h50V225z M420,450h-50V155h50V450z M420,135h-50v-25h50V135
				z"/>
			<path d="M57.072,282.072L285,54.143V90h20V30c0-5.522-4.477-10-10-10h-65v20h40.857L42.929,267.929L57.072,282.072z"/>
		</g>
	</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                    </div>
                                    <h5 style="color: #fff">High Growth</h5>
                                    <p style="color: #fff">Our reinvestment strategy enables us to quickly grow our fleet of mobile units.</p>
                            </a>
                        </div>

                        <div class="tiny-slide">
                            <a href="javascript:void(0);" class="customer-testi text-center" style="text-decoration: none;">
                                <div class="mb-4">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="72" height="72" x="0px" y="0px"
	 viewBox="0 0 361.465 361.465" style="enable-background:new 0 0 361.465 361.465;" xml:space="preserve">
<g id="XMLID_2136_">
	<g id="XMLID_2137_">
		<path id="XMLID_2138_" style="fill:#1F2C47;" d="M293.341,235.602H68.133l-0.139-10.276c-0.006-0.381-0.012-0.762-0.012-1.145
			c0-62.171,50.58-112.75,112.75-112.75c62.171,0,112.75,50.579,112.75,112.75c0,0.373-0.006,0.744-0.012,1.115L293.341,235.602z
			 M88.375,215.602h184.713c-4.345-47.134-44.107-84.171-92.356-84.171S92.72,168.468,88.375,215.602z"/>
	</g>
	<g id="XMLID_2141_">
		<g id="XMLID_2142_">
			<rect id="XMLID_2143_" x="211.021" y="78.815" style="fill:#1F2C47;" width="20" height="53.223"/>
		</g>
		<g id="XMLID_2144_">
			<rect id="XMLID_2145_" x="130.441" y="78.815" style="fill:#1F2C47;" width="20" height="53.223"/>
		</g>
	</g>
	<g id="XMLID_2146_">
		<path id="XMLID_2147_" style="fill:#1F2C47;" d="M249.074,88.815H112.389c-15,0-27.204-12.203-27.204-27.203V27.204
			C85.186,12.204,97.389,0,112.389,0h136.684c15,0,27.204,12.204,27.204,27.204v34.408
			C276.278,76.612,264.073,88.815,249.074,88.815z M112.389,20c-3.972,0-7.204,3.231-7.204,7.204v34.408
			c0,3.972,3.231,7.203,7.204,7.203h136.684c3.973,0,7.204-3.231,7.204-7.203V27.204c0-3.973-3.231-7.204-7.204-7.204H112.389z"/>
	</g>
	<g id="XMLID_2150_">
		<path id="XMLID_35_" style="fill:#00969B;" d="M207.09,225.601l-23.663,123.416c-0.503,3.263-5.204,3.263-5.707,0l-23.663-123.416
			H207.09z"/>
		<path id="XMLID_2151_" style="fill:#1F2C47;" d="M180.574,361.465c-6.323,0-11.625-4.478-12.697-10.683l-25.918-135.181h77.231
			l-25.919,135.181C192.197,356.987,186.896,361.465,180.574,361.465z M166.158,235.602l14.417,75.191l14.417-75.191
			L166.158,235.602L166.158,235.602z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                    </div>
                                    <h5 style="color: #fff">Stability</h5>
                                    <p style="color: #fff">Like you, we believe sustainability is good business.</p>
                            </a>
                        </div>

                        <div class="tiny-slide">
                            <a href="javascript:void(0);" class="customer-testi text-center" style="text-decoration: none;">
                                <div class="mb-4">
                                    <svg width="72" height="72" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke="#000" stroke-width="2" d="M10,21 C7.50000053,23.5 5.00000002,23 3,21 C0.999999977,19 0.500000114,16.5 3.00000004,14 C5.49999997,11.5 5.99999998,11 5.99999998,11 L13.0000005,18 C13.0000005,18 12.4999995,18.5 10,21 Z M14.0003207,3 C16.5,0.499999776 19,0.999999776 21.001068,3 C23.002136,5.00000022 23.5,7.49999978 21.001068,10 C18.5021359,12.5000002 18.0007478,13 18.0007478,13 L11,6 C11,6 11.5006414,5.50000022 14.0003207,3 Z M11,9.9999 L8.5,12.4999999 L11,9.9999 Z M14,13 L11.5,15.5 L14,13 Z"/>
                                      </svg>
                                    </div>
                                    <h5 style="color: #fff">Dedication</h5>
                                    <p style="color: #fff">Dedication of our time to make sure We'll come up with a more reliable way and trustworthy opportunity for you to earn from our community.</p>
                            </a>
                        </div>

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </div>

    <div class="section padding-top-bottom-big bg-white" id="concept">

		<div class="container">
			<div class="row">
				<div class="col-md-6 align-self-center" data-scroll-reveal="enter left move 50px over 0.6s after 0.3s">
					<h4 style="color:#005e33">Help you succeed</h4>
					<p class="lead">Your financial success matters to us.</p>
					<p>That’s why, whether you’re a start-up venture or a large multinational client, we’ll give you access to our stock, investment and business solutions your finance needs to thrive.</p>
				</div>
				<div class="col-md-5 offset-md-1 order-first order-md-last mb-4 mb-md-0">
					<div class="img-wrap">
						<img src="{{asset('home/img/porlogis_14.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 my-5"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 mb-4 mb-md-0">
					<div class="img-wrap">
						<img src="{{asset('home/img/porlogis_11.png')}}" alt="">
					</div>
				</div>
				<div class="col-md-6 offset-md-1 align-self-center" data-scroll-reveal="enter right move 50px over 0.6s after 0.3s">
					<h4 style="color:#005e33">Your needs come first</h4>
					<p>You asked us to get even closer to your success. We listened. When you partner with us, you gain access to our Customer Experience Team, a customer service powerhouse that works together 24/7 to help your investment/trading run more efficiently with customized solutions, personalized support, account maintenance and investment management.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top-bottom-big background-grey" id="team">
		<div class="background-parallax" style="background-image: url('img/parallax-3.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">agents</div>
						<h3 style="color:#005e33"> Our Agents </h3>
						<p>Our agents strive to ensure long-lasting relationships that deliver value for your finance. Your success is our success.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap" >
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-1">
							<div class="team-img-wrap rounded js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{asset('home/img/1star_agent.png')}}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>
						<p> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> 1 STAR AGENT </p>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-2">
							<div class="team-img-wrap rounded js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{asset('home/img/2star_agent.png')}}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>

						<p> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> 2 STAR AGENT </p>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-3">
							<div class="team-img-wrap rounded js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{asset('home/img/3star_agent.png')}}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>

						<p> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> 3 STAR AGENT </p>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap">
						<a class="d-inline" data-toggle="modal" data-target="#team-modal-4">
							<div class="team-img-wrap rounded js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<img src="{{asset('home/img/4star_agent.png')}}" alt="">
								<div class="team-img-mask"></div>
							</div>
						</a>

						<p> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> <i class="fa fa-star text-warning" style="font-size: 15px;"> </i> 4 STAR AGENT </p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section padding-top-bottom-big" id="team">
		<div class="background-parallax" style="background-image: url('img/parallax-3.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>

		<div class="container">
			<div class="row justify-content-center">

				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap text-center">
							<div class="team-img-wrap js-tilt" data-tilt-perspective="700" data-tilt-speed="700" data-tilt-max="24">
								<div class="count-up">
									<p class="counter-count" style="font-size:30px;">2053</p> <br> <br>
									<p class="text-center"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" x="0px" y="0px"
                                        viewBox="0 0 482.003 482.003" style="enable-background:new 0 0 482.003 482.003;" xml:space="preserve">
                                   <g>
                                       <path d="M209.106,118.097c32.56,0,59.049-26.489,59.049-59.049C268.155,26.489,241.665,0,209.106,0
                                           c-32.551,0-59.033,26.489-59.033,59.048C150.073,91.607,176.555,118.097,209.106,118.097z"/>
                                       <path d="M370.582,141.248c6.07-1.993,11.001-6.232,13.884-11.935c2.882-5.703,3.371-12.187,1.376-18.257
                                           c-3.233-9.846-12.364-16.461-22.721-16.461c-2.531,0-5.045,0.404-7.471,1.201l-97.699,32.097c0,0-103.868,0-104.416,0
                                           c-9.318,0-17.855,5.471-21.747,13.936l-56.84,123.64c-2.669,5.806-2.917,12.303-0.699,18.295
                                           c2.219,5.993,6.638,10.763,12.442,13.432c3.164,1.454,6.521,2.192,9.979,2.192c9.32,0,17.857-5.47,21.749-13.935l20.588-44.783
                                           v213.899c0,15.127,12.307,27.434,27.434,27.434c15.127,0,27.434-12.307,27.434-27.434v-141.8h23.984v141.8
                                           c0,15.127,12.307,27.434,27.434,27.434c15.127,0,27.434-12.307,27.434-27.434V173.396L370.582,141.248z"/>
                                       <path d="M407.284,200.301l-36.891-48.946c-1.865-2.474-4.517-3.893-7.277-3.893s-5.412,1.419-7.278,3.894L318.95,200.3
                                           c-2.699,3.579-2.042,6.24-1.41,7.508c0.632,1.268,2.361,3.394,6.844,3.394h21.733v252.404c0,9.389,7.611,17,17,17
                                           c9.389,0,17-7.611,17-17V211.201h21.732c4.482,0,6.212-2.126,6.844-3.394C409.325,206.54,409.982,203.879,407.284,200.301z"/>
                                   </g> <g> </g> <g></g><g> </g><g></g> <g> </g>  <g> </g><g> </g><g> </g> <g> </g> <g>  </g>  <g></g> <g> </g> <g></g><g> </g> <g> </g></svg> </p>
									<h5>Happy Clients </h5>
								</div>
							</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap text-center">
						<div class="count-up">
							<p class="counter-count" style="font-size:30px;">5304</p> <br> <br>
							<p class="text-center"> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 231.087 231.087" width="48" height="48" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 231.087 231.087">
                                <g>
                                  <path d="m230.042,142.627c-1.871-2.744-5.612-3.452-8.355-1.581l-65.513,44.667-14.55-19.473c-1.526-2.036-4.241-2.977-6.788-2.129-3.185,1.06-4.908,4.501-3.848,7.686l11.908,35.785c0.45,1.33 1.184,2.645 2.18,3.757 3.94,4.401 10.702,4.776 15.104,0.836l.777-.695 68.129-60.985c2.216-1.981 2.676-5.346 0.956-7.868z"/>
                                  <path d="m120.211,190.676h-108.211v-162.49h158.43v124.823c0,3.313 2.687,6 6,6s6-2.687 6-6v-130.823c0-3.313-2.687-6-6-6h-170.43c-3.313,0-6,2.687-6,6v174.49c0,3.313 2.687,6 6,6h114.211c3.313,0 6-2.687 6-6 0-3.314-2.687-6-6-6z"/>
                                  <path d="m139.694,53.855h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.313,0 6-2.687 6-6s-2.686-6-6-6z"/>
                                  <path d="m139.694,79.79h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.313,0 6-2.687 6-6s-2.686-6-6-6z"/>
                                  <path d="m139.694,105.725h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.313,0 6-2.687 6-6s-2.686-6-6-6z"/>
                                  <path d="m145.694,137.659c0-3.313-2.687-6-6-6h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.314,0 6-2.686 6-6z"/>
                                  <path d="M42.735,156.329c-3.313,0-6,2.687-6,6s2.687,6,6,6h48.479c3.313,0,6-2.687,6-6s-2.687-6-6-6H42.735z"/>
                                </g>
                              </svg></p>
							<h5> Projects Done </h5>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6 mb-5 mb-xl-0">
					<div class="team-wrap text-center">
						<div class="count-up">
							<p class="counter-count" style="font-size:30px;">7000</p> <br> <br>
							<p class="text-center"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" width="48" height="48" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 76.07 76.07" style="enable-background:new 0 0 76.07 76.07;" xml:space="preserve">
                           <path style="fill:#231F20;" d="M24.915,12.472c0.016-0.524,0.063-2.119,1.276-2.578c1.199-0.451,2.359,0.708,2.58,0.945
                               c0.377,0.403,0.355,1.036-0.048,1.413c-0.401,0.375-1.034,0.356-1.41-0.044c-0.096-0.101-0.224-0.207-0.339-0.288
                               c-0.026,0.136-0.052,0.333-0.06,0.61c-0.071,2.411,1.809,3.143,1.828,3.15c0.362,0.135,0.613,0.468,0.646,0.853
                               c0.553,6.581,5.729,8.709,8.15,8.709s7.598-2.129,8.149-8.709c0.032-0.385,0.283-0.718,0.646-0.853
                               c0.187-0.074,1.898-0.822,1.829-3.15c-0.008-0.278-0.033-0.475-0.06-0.611c-0.116,0.081-0.244,0.188-0.34,0.289
                               c-0.381,0.4-1.013,0.417-1.412,0.04c-0.4-0.378-0.422-1.006-0.046-1.409c0.223-0.237,1.391-1.395,2.581-0.945
                               c1.214,0.458,1.261,2.054,1.276,2.578c0.083,2.84-1.608,4.237-2.54,4.789c-0.846,6.88-6.34,9.983-10.084,9.983
                               s-9.238-3.103-10.085-9.983C26.523,16.709,24.832,15.313,24.915,12.472z M37.539,31.071c0,0,2.126-0.47,2.126-2.366h-2.126h-2.126
                               C35.412,30.601,37.539,31.071,37.539,31.071z M37.482,49.738l4.154-3.375c-0.436-2.168-2.42-15.081-2.564-15.292
                               c-0.824,0.564-1.533,0.64-1.533,0.64s-0.709-0.077-1.533-0.64c-0.144,0.211-2.128,13.125-2.564,15.292L37.482,49.738z
                                M44.517,12.329c0.201,0,0.394,0.081,0.535,0.224c0.141,0.144,0.219,0.338,0.215,0.539c-0.013,0.694-0.132,3.023-1.153,3.854
                               c-0.652,0.53-1.671,0.859-2.657,0.859c-0.943,0-1.736-0.299-2.232-0.842c-0.535-0.587-0.89-1.811-1.093-2.725h-1.184
                               c-0.203,0.913-0.558,2.138-1.093,2.725c-0.496,0.543-1.289,0.842-2.232,0.842c-0.986,0-2.005-0.329-2.656-0.859
                               c-1.022-0.83-1.142-3.159-1.154-3.854c-0.003-0.201,0.074-0.396,0.215-0.539c0.142-0.143,0.334-0.224,0.535-0.224h5.845
                               c0.219,0,0.427,0.096,0.569,0.262c0.037,0.043,0.053,0.097,0.079,0.147h0.97c0.026-0.05,0.042-0.104,0.079-0.147
                               c0.143-0.166,0.351-0.262,0.569-0.262H44.517z M35.5,13.829h-4.142c0.091,0.878,0.298,1.747,0.552,1.953
                               c0.694,0.563,2.374,0.676,2.836,0.169C35.022,15.647,35.31,14.694,35.5,13.829z M43.719,13.829h-4.142
                               c0.191,0.865,0.478,1.819,0.754,2.122c0.462,0.507,2.144,0.394,2.837-0.169C43.415,15.58,43.626,14.708,43.719,13.829z M45.563,8.82
                               c-0.041,0.551,0.372,1.03,0.923,1.071c0.025,0.002,0.05,0.003,0.075,0.003c0.519,0,0.957-0.4,0.996-0.926
                               c0.239-3.209-1.895-4.635-1.985-4.694c-0.459-0.299-1.063-0.168-1.369,0.286c-0.305,0.454-0.182,1.072,0.268,1.383
                               C44.521,5.979,45.711,6.828,45.563,8.82z M29.189,10.312c0.553,0,1-0.448,1-1c0-4.721,3.803-4.949,4.218-4.959h8.559
                               c0.553,0,1-0.448,1-1s-0.447-1-1-1h-8.572c-2.146,0.029-6.204,1.52-6.204,6.959C28.189,9.864,28.637,10.312,29.189,10.312z
                                M10.305,47.546c0.847,6.88,6.341,9.983,10.085,9.983s9.238-3.103,10.084-9.983c0.932-0.551,2.623-1.948,2.54-4.789
                               c-0.016-0.524-0.063-2.119-1.276-2.578c-1.19-0.449-2.359,0.708-2.581,0.945c-0.376,0.402-0.354,1.031,0.046,1.409
                               c0.399,0.378,1.031,0.36,1.412-0.04c0.096-0.101,0.224-0.208,0.34-0.289c0.026,0.136,0.052,0.333,0.06,0.611
                               c0.069,2.328-1.643,3.076-1.829,3.15c-0.362,0.135-0.613,0.468-0.646,0.853c-0.552,6.581-5.729,8.709-8.149,8.709
                               s-7.598-2.129-8.15-8.709c-0.032-0.385-0.283-0.718-0.646-0.853c-0.02-0.007-1.899-0.739-1.828-3.15
                               c0.008-0.278,0.033-0.475,0.06-0.61c0.115,0.081,0.242,0.186,0.336,0.285c0.379,0.405,1.013,0.424,1.413,0.048
                               c0.403-0.377,0.425-1.01,0.048-1.413c-0.221-0.237-1.383-1.398-2.58-0.945c-1.214,0.458-1.261,2.053-1.276,2.578
                               C7.683,45.598,9.374,46.995,10.305,47.546z M18.234,58.991c0,1.896,2.09,2.366,2.09,2.366s2.09-0.47,2.09-2.366h-2.09H18.234z
                                M17.203,58.566c-0.233-0.5-0.831-0.717-1.33-0.48l-2.174,1.021l-0.197-3.603c-0.029-0.552-0.504-0.971-1.053-0.944
                               c-0.552,0.03-0.974,0.502-0.943,1.053l0.042,0.774C8.981,57.36,0,61.563,0,72.718c0,0.552,0.447,1,1,1s1-0.448,1-1
                               c0-9.323,6.896-13.101,9.663-14.242l0.122,2.219c0.018,0.332,0.2,0.633,0.485,0.804c0.157,0.094,0.335,0.142,0.513,0.142
                               c0.145,0,0.29-0.031,0.425-0.095l3.516-1.65C17.223,59.661,17.438,59.066,17.203,58.566z M22.5,29.705
                               c0.269,0,0.537-0.108,0.734-0.321c1.75-1.893,3.911-3.31,6.25-4.097c0.523-0.176,0.805-0.743,0.628-1.267
                               c-0.175-0.523-0.738-0.805-1.267-0.629c-2.654,0.894-5.103,2.496-7.08,4.634c-0.375,0.406-0.35,1.039,0.056,1.414
                               C22.014,29.617,22.257,29.705,22.5,29.705z M8.763,69.699c-0.553,0-1,0.448-1,1v2.019c0,0.552,0.447,1,1,1s1-0.448,1-1v-2.019
                               C9.763,70.147,9.315,69.699,8.763,69.699z M32.016,69.699c-0.553,0-1,0.448-1,1v2.019c0,0.552,0.447,1,1,1s1-0.448,1-1v-2.019
                               C33.016,70.147,32.568,69.699,32.016,69.699z M29.117,56.387l0.042-0.774c0.03-0.551-0.392-1.023-0.943-1.053
                               c-0.549-0.025-1.023,0.393-1.053,0.944l-0.197,3.603l-2.174-1.021c-0.503-0.236-1.097-0.019-1.33,0.48
                               c-0.234,0.5-0.02,1.095,0.48,1.33l3.516,1.65c0.135,0.063,0.28,0.095,0.425,0.095c0.178,0,0.355-0.047,0.513-0.142
                               c0.285-0.17,0.468-0.472,0.485-0.804l0.122-2.219c2.767,1.141,9.663,4.918,9.663,14.242c0,0.552,0.447,1,1,1s1-0.448,1-1
                               C40.665,61.563,31.684,57.36,29.117,56.387z M11.378,39.527c0.051,0.008,0.101,0.011,0.15,0.011c0.486,0,0.913-0.355,0.988-0.851
                               c0.151-1.004,0.551-1.921,1.155-2.651c0.352-0.425,0.293-1.056-0.133-1.408c-0.425-0.352-1.056-0.292-1.408,0.133
                               c-0.836,1.01-1.387,2.265-1.593,3.629C10.456,38.936,10.832,39.445,11.378,39.527z M15.143,35.133h8.181
                               c0.411,0.01,4.019,0.229,4.019,4.71c0,0.552,0.447,1,1,1s1-0.448,1-1c0-5.244-3.916-6.682-6-6.71h-8.199c-0.553,0-1,0.448-1,1
                               S14.59,35.133,15.143,35.133z M15.937,32.364h8.083c0.208-0.002,5.096,0.021,5.675,4.975c0.06,0.509,0.491,0.884,0.992,0.884
                               c0.038,0,0.078-0.002,0.117-0.007c0.549-0.064,0.941-0.561,0.877-1.109c-0.634-5.419-5.313-6.775-7.673-6.742h-8.071
                               c-0.553,0-1,0.448-1,1S15.384,32.364,15.937,32.364z M43.195,60.988c-0.553,0-1,0.448-1,1v10.688c0,0.552,0.447,1,1,1s1-0.448,1-1
                               V61.988C44.195,61.436,43.748,60.988,43.195,60.988z M68.28,60.988c-0.553,0-1,0.448-1,1v10.688c0,0.552,0.447,1,1,1s1-0.448,1-1
                               V61.988C69.28,61.436,68.833,60.988,68.28,60.988z M55.793,19.6c0.002,0,0.004,0,0.004,0c5.266,0,9.862,4.017,10.837,9.298
                               c0.167,0.006,0.337,0.031,0.509,0.095c1.214,0.458,1.261,2.053,1.276,2.578c0.083,2.84-1.608,4.237-2.539,4.789
                               c-0.847,6.88-6.341,9.983-10.085,9.983s-9.238-3.103-10.085-9.983c-0.931-0.551-2.622-1.948-2.539-4.789
                               c0.016-0.524,0.063-2.119,1.276-2.578c0.172-0.065,0.342-0.089,0.509-0.095C45.931,23.618,50.528,19.6,55.793,19.6z M46.846,29.76
                               c0.08,0.075,0.147,0.14,0.183,0.178c0.377,0.403,0.355,1.036-0.048,1.414c-0.401,0.376-1.034,0.357-1.413-0.047
                               c-0.094-0.099-0.222-0.205-0.337-0.286c-0.026,0.136-0.052,0.333-0.06,0.611c-0.071,2.411,1.809,3.143,1.828,3.15
                               c0.362,0.135,0.613,0.468,0.646,0.853c0.553,6.581,5.729,8.709,8.15,8.709s7.598-2.129,8.15-8.709
                               c0.032-0.385,0.283-0.718,0.646-0.853c0.187-0.074,1.897-0.822,1.828-3.15c-0.008-0.278-0.033-0.475-0.06-0.61
                               c-0.115,0.081-0.243,0.188-0.339,0.288c-0.381,0.4-1.013,0.417-1.412,0.04c-0.4-0.378-0.422-1.007-0.046-1.409
                               c0.035-0.038,0.102-0.104,0.183-0.179c-0.596-4.593-4.477-8.159-8.948-8.159c-0.001,0-0.001,0-0.002,0h-0.001
                               C51.323,21.6,47.441,25.166,46.846,29.76z M49.22,35.832c-1.281-1.414-1.076-3.667-1.066-3.763c0.037-0.384,0.36-0.676,0.746-0.676
                               h4.994h1.012h1.78h1.252h4.754c0.386,0,0.709,0.292,0.746,0.677c0.01,0.095,0.215,2.349-1.067,3.763
                               c-0.659,0.728-1.563,1.096-2.688,1.096c-1.146,0-2.063-0.375-2.723-1.114c-0.247-0.277-0.423-0.587-0.569-0.904h-1.192
                               c-0.146,0.317-0.322,0.628-0.569,0.904c-0.66,0.739-1.576,1.114-2.723,1.114C50.783,36.928,49.879,36.56,49.22,35.832z
                                M55.968,33.41c-0.023-0.185-0.037-0.359-0.044-0.518h-0.257c-0.007,0.158-0.021,0.332-0.045,0.518H55.968z M57.424,32.893
                               c0.031,0.569,0.169,1.381,0.658,1.927c0.368,0.41,0.892,0.609,1.601,0.609c0.69,0,1.205-0.196,1.573-0.6
                               c0.497-0.545,0.646-1.36,0.687-1.936h-4.005H57.424z M49.648,32.893c0.039,0.575,0.189,1.391,0.686,1.936
                               c0.368,0.403,0.883,0.6,1.573,0.6c0.711,0,1.235-0.201,1.604-0.613c0.484-0.542,0.622-1.353,0.654-1.922h-0.272H49.648z
                                M76.07,61.531v11.176c0,0.552-0.447,1-1,1s-1-0.448-1-1V61.531c0-5.992-2.742-9.704-5.374-11.896
                               c-4.522,4.711-8.86,7.105-12.901,7.105c-4.072,0-8.447-2.431-13.007-7.215c-2.8,2.309-4.675,5.59-5.174,9.314
                               c-0.073,0.547-0.576,0.927-1.124,0.858c-0.548-0.074-0.932-0.577-0.858-1.124c0.85-6.332,5.184-11.542,11.311-13.597
                               c0.391-0.13,0.816-0.01,1.08,0.301c0.04,0.047,4.038,4.692,7.773,4.692c3.728,0,7.611-4.635,7.65-4.682
                               c0.257-0.31,0.673-0.437,1.059-0.32C64.619,45.002,76.07,48.596,76.07,61.531z M67.062,48.435c-1.056-0.677-1.984-1.107-2.549-1.336
                               c-1.27,1.373-4.881,4.872-8.718,4.872c-3.845,0-7.542-3.519-8.827-4.878c-0.893,0.342-1.736,0.765-2.528,1.254
                               c4.089,4.231,7.909,6.395,11.356,6.395C59.216,54.741,63.007,52.605,67.062,48.435z M17.643,67.663l5.844,2.785
                               c-0.175-1.012-0.379-2.19-0.585-3.369l-4.728-2.43C18.007,65.587,17.824,66.63,17.643,67.663z M18.818,61.356
                               c-0.031,0.046-0.13,0.522-0.266,1.238l3.914,2.012c-0.32-1.788-0.58-3.168-0.635-3.249c-0.81,0.564-1.507,0.64-1.507,0.64
                               S19.628,61.92,18.818,61.356z M16.768,72.718h6.837l-6.316-3.009C17.063,71.008,16.872,72.123,16.768,72.718z M20.504,43.125v4.719
                               h-1.229c-0.553,0-1,0.448-1,1s0.447,1,1,1h2.229c0.553,0,1-0.448,1-1v-5.719c0-0.552-0.447-1-1-1S20.504,42.572,20.504,43.125z"/>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           <g>
                           </g>
                           </svg> </p>
							<h5> Available Workers </h5>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-md-6">
					<div class="team-wrap text-center">
						<div class="count-up">
							<p class="counter-count" style="font-size:30px;">1400</p> <br> <br>
							<p class="text-center"> <svg width="48" height="48"viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"/></svg></p>
							<h5> Support Hours </h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


    <div id="gallery" class="section gallery padding-top-bottom-big background-dark-blue-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">gallery</div>
						<h3 class="text-light" style="color:#005e33"> Check our Gallery </h3>
						<p> </p>
					</div>
				</div>
			</div>
		</div>

      <div class="container">

        <div class="row no-gutters" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{asset('home/img/Photo/prologis_9.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_9.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="{{asset('home/img/Photo/prologis_5.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_5.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="{{asset('home/img/Photo/prologis_6.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_6.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="{{asset('home/img/Photo/prologis_7.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_7.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="{{asset('home/img/Photo/prologis_8.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_8.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="{{asset('home/img/Photo/prologis_10.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_10.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="{{asset('home/img/Photo/prologis_11.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_11.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="{{asset('home/img/Photo/prologis_12.png')}}" class="venobox" data-gall="gallery-item">
                <img src="{{asset('home/img/Photo/prologis_12.png')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
	</div>

	<div class="section padding-top-bottom-big background-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center mt-5">
						<div class="back-title text-dark">testimonials</div>
						<h5 class="text-dark title-wrap" style="color:#005e33"> Don't take our word for it, here's what some of our clients have to say about us! </h5>
					</div>

				</div>
			</div>

       	 	<div class="row">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide text-dark" data-ride="carousel">

                      <div class="carousel-inner mt-4">
                        <div class="carousel-item text-center active">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://crypto-atp.com/asset/images/man2.png" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-green text-uppercase">Paul Waulker</strong></h5>
                            <h6 class="text-dark mt-1 m-0">London, England</h6>
                            <p class="m-0 pt-3 text-dark">“Great service! As a lawyer, I have been worried about investing. But when I came here, it was great and my earnings are okay. I literally thought I was going lose out so poorly but I recorded much profits!”</p>
                        </div>

						<div class="carousel-item text-center">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://crypto-atp.com/asset/images/man1.png" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-dark text-uppercase">Amir Hassan</strong></h5>
                            <h6 class="text-dark mt-1 m-0">Instabul, Turkey</h6>
                            <p class="m-0 pt-3 text-dark">“Great service! As a lawyer, I have been worried about investing. But when I came here, it was great and my earnings are okay. I literally thought I was going lose out so poorly but I recorded much profits!”</p>
                        </div>

                        <div class="carousel-item text-center">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://crypto-atp.com/asset/images/lady.png" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-dark text-uppercase">Mitchel Brooks</strong></h5>
                            <h6 class="text-dark mt-1 m-0">Houston, Texas</h6>
                            <p class="m-0 pt-3 text-dark">“Superb Service! As a marketer, I needed to work with a consultant to optimize my earnings, this platform was highly recommended by a friend and it has helped me out.”</p>
                        </div>

                        <div class="carousel-item text-center">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://crypto-atp.com/asset/images/man3.png" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-dark text-uppercase">Luis Ramirez</strong></h5>
                            <h6 class="text-dark mt-1 m-0">Sao Paulo, Brazil</h6>
                            <p class="m-0 pt-3 text-dark">“Negociar criptomoedas foi uma tarefa enorme para mim. Eu não sabia por onde começar ou que perguntas fazer, e parecia nunca seguir em frente. A equipe aqui fez tudo - quase sem tempo ou esforço para mim!”</p>
                        </div>

						 <div class="carousel-item text-center">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/testimonials/testimonials-1.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-dark text-uppercase">Saul Rodriguez</strong></h5>
                            <h6 class="text-dark mt-1 m-0">Cartegena, Spain</h6>
                            <p class="m-0 pt-3 text-dark">“Gran servicio! Como empresario, me ha preocupado la riqueza. Pero cuando vine aquí, fue genial y mis ganancias están bien. Literalmente pensé que iba a perder tan mal, ¡pero registré muchas ganancias!”</p>
                        </div>

						 <div class="carousel-item text-center">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/testimonials/testimonials-5.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-dark text-uppercase">Bruno Matias</strong></h5>
                            <h6 class="text-dark mt-1 m-0">Lisbon, Portugal</h6>
                            <p class="m-0 pt-3 text-dark">“Ótimo serviço! Como corretor de imóveis, tenho ganhado muito desde que cheguei aqui, tem sido ótimo e meus ganhos são bons. Eu literalmente pensei que perderia muito, mas registrei muitos lucros!”</p>
                        </div>

						<div class="carousel-item text-center">
                            <div class="img-box p-1 rounded-circle m-auto">
                                <img class="d-block w-100 rounded-circle" src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/testimonials/testimonials-3.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-dark text-uppercase">Emma Aurora </strong></h5>
                            <h6 class="text-dark mt-1 m-0">Vicenza, Italy</h6>
                            <p class="m-0 pt-3 text-dark">“Buon servizio! Come agente immobiliare, ho guadagnato molto da quando sono arrivato qui, è stato fantastico e i miei guadagni sono a posto. Ho letteralmente pensato che avrei perso così poco, ma ho registrato molti profitti!”</p>
                        </div>

                      </div>
                      <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next text-dark" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>


		</div>
	</div>
	<!-- Modal Team 1-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-1" tabindex="-1" role="dialog" aria-labelledby="team-modal-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{asset('home/img/1star_agent.png')}})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container mt-3 mb-5">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">1 STAR AGENT</h3>
								<p class="lead"><i class="fa fa-star text-warning"></i></p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">With our 1 STAR AGENT you get:</p>
								<ul class="app-list mt-4">
									<li>0.90% ROI DAILY</li>
									<li>Weekly Withdrawal (except Saturday and Sunday)</li>
									<li>$15 minimum withdrawal</li>

								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Team 2-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-2" tabindex="-1" role="dialog" aria-labelledby="team-modal-2" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{asset('home/img/2star_agent.png')}})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">2 STAR AGENT</h3>
								<p class="lead"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
							</div>
							<div class="col-xl-12">
							<p class="mb-3">With our 2 STAR AGENT you get:</p>
								<ul class="app-list mt-4">
									<li>1% ROI DAILY</li>
									<li>Weekly Withdrawal (Saturday & Sunday Only)</li>
									<li>$15 minimum withdrawal</li>

								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Team 3-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-3" tabindex="-1" role="dialog" aria-labelledby="team-modal-3" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{asset('home/img/3star_agent.png')}})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">3 STAR AGENT</h3>
								<p class="lead"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">With our 3 STAR AGENT you get:</p>
								<ul class="app-list mt-4">
									<li>2% ROI DAILY</li>
									<li>Weekly Withdrawal (Saturday & Sunday Only)</li>
									<li>$15 minimum withdrawal</li>

								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Team 4-->

	<div class="modal fade bd-example-modal-lg" id="team-modal-4" tabindex="-1" role="dialog" aria-labelledby="team-modal-4" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-img-wrap" style="background-image: url({{asset('home/img/4star_agent.png')}})"></div>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="col-md-12 mb-4">
								<h3 class="mb-0">4 STAR AGENT</h3>
								<p class="lead"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
							</div>
							<div class="col-xl-12">
								<p class="mb-3">With our 4 STAR AGENT you get:</p>
								<ul class="app-list mt-4">
									<li>3% ROI DAILY</li>
									<li>Weekly Withdrawal (Saturday & Sunday Only)</li>
									<li>$15 minimum withdrawal</li>

								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section padding-top-bottom-big background-grey" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">faq</div>
						<h3 style="color:#005e33">Questions and Answers</h3>
						<p>Commonly asked questions and answers.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div id="accordion" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingOne">
								<a class="background-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What is Investment?
								</a>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<h6>What is Investment?</h6>
									<p>Investing with prologistrust is a very safe and reliable way to minimise risk... </p>
 									<p>Our agents guarantee the growth of your capital by analysing the prologis stock market which invest logistics facilities, with a focus on the consumption side of the global supply chain.</p>
  									<p>We have rank ever agent according to the performance and giving you a very affordable start up capital.(rest assured that your capital is very safe with your agents the contract is to ensure that you meet up with the adequate amount as promised)</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingTwo">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								What is trading?
								</a>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<h6>What is trading?</h6>
									<p>Trading with Prologistrust gives you a direct aim into the prologis stock market.
										Which plays as buying and selling of prologis stock to make a profit. When you buy some of the prologis stock you benefit from their day-to-day transaction and the value of your trades will change as the company’s stock price moves up and down...</p>
  									<p> Prologistrust has analyzed the prologis stock market and historical movements over the years so that you do not have to buy any expensive software or robots... </p>
									<p> Note: our company is not to behold responsible for your loss trade but we offer you the best supports you need and constant updates.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingThree">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Who is my Agent?
								</a>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<h6>Who is my Agent?</h6>
									<p>prologistrust have given  you a chance of winning and increasing your finance... </p>
 									<p>We offer you a experienced experts trading agent in the field of logistic facility and maketing... </p>
   									<p>The agency package was added for those who are not good at trading( do not know how to trade) or trying to avoid lost in the prologis stock market. </p>
  									<p>Investment agents often used  analyze changes in the prologis stock market by monitoring figures, such as interest rates, unemployment rates, gross domestic product (GDP), and other types of economic data that come out of prologis. For example, a agent conducting a fundamental analysis of the EUR/USD currency pair would find information on the interest rates in the Eurozone more useful than those in the U.S. Those agents would also want to be on top of any significant news releases coming out of each prologis transaction to gauge the relation to the health of their client or investor and each star agent put more effort than the other. Giving you a perfect daily return an increase in your finance.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div id="accordion-snd" class="accordion-style">
						<div class="card">
							<div class="card-header" id="headingFour">
								<a class="background-white" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								Can my agent make a loss?
								</a>
							</div>

							<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion-snd">
								<div class="card-body">
									<h6>Can my agent make a loss?</h6>
									<p>You do not have to worry about losing when it comes to prologistrust... </p>
  									<p>The agency contract package is there to ensure you achieve every amount as agreed in whatever agency package you choose and no you can never lose whenever you are under a contract with one of our agency contracts because we take full responsibility for your every loss and will make sure you are compensated for that lost.
 										( your success is our success) </p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingFive">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								How do I invest?
								</a>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-snd">
								<div class="card-body">
									<h6>How do I invest?</h6>
									<p>(STEP 1) <br>
									*Register your account with prologistrust/ registration is free </p>

									<p>	(STEP 2) <br>
									*Select an investment agent that is suitable for your capital. </p>

									<p>	(STEP 3) <br>
									Make your payment using the payment system listed below.
									*CREDIT CARD 💳
									*BITCOIN
									* ETHERIUM
									* PERFECT MONEY </p>

									<p>	(STEP 4) <br>
									Send your proof of payment to our system and then your account will be activated and you will start making profits in the next 24 hours.</p>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="headingSix">
								<a class="collapsed background-white" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									How much should I invest?
								</a>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion-snd">
								<div class="card-body">
									<h6>When am I expected to make a withdrawal?</h6>
									<p>You can make your withdrawals on weekends</p>
									<p> Note: the minimum withdraw is $15</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<style>



	.counter
{
    text-align: center;
}

.counter-count
{
    font-size: 50px;
    font-weight: bold;
    position: relative;
    color: #000000;
    text-align: center;
    display: inline-block;
}

</style>

@endsection

@section('scripts')

<script>

	$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {

          //chnage count up speed here
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

</script>


<script>
	$(document).ready(function(){
		var img = [document.querySelector('#image').dataset.image1,document.querySelector('#image').dataset.image2];
		var pos = 0;

		setInterval(() => {
			if(pos > 1){
				pos = 0;
			}
			document.querySelector('#image').style.backgroundImage = "url("+img[pos]+")";
			pos++;
		}, 5000);

});

class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = "";
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of word
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if (this.isDeleting) {
      // Remove characters
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add charaters
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Initial Type Speed
    let typeSpeed = 80;

    if (this.isDeleting) {
      // Increase speed by half when deleting
      typeSpeed /= 1;
    }

    // If word is complete
    if (!this.isDeleting && this.txt === fullTxt) {
      // Make pause at end
      typeSpeed = this.wait;
      // Set delete to true
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === "") {
      this.isDeleting = false;
      // Move to next word
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 500;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}

// Init On DOM Load
document.addEventListener("DOMContentLoaded", init);

// Init App
function init() {
  const txtElement = document.querySelector(".txt-type");
  const words = JSON.parse(txtElement.getAttribute("data-words"));
  const wait = txtElement.getAttribute("data-wait");
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}

</script>
@endsection
