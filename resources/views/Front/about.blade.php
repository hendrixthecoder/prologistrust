@extends('Layouts.home')

@section('title')
    {{ __($page_title) }}
@endsection

@section('content')
    <!-- Primary Page Layout
	================================================== -->

    <div class="section padding-top-bottom-big">
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

		<div class="col-md-12">
			<div class="text-center">
				<h3> {{ __($page_title) }}</h3>
			</div>
		</div>
		
	</div>

    <div class="section padding-top-bottom-big background-white" id="concept">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">ABOUT US</div>
                    </div>
				</div>

                <div class="col-md-12">
                    <div class="title-spread text-center">
                        <h3>Who we are ?</h3>
						<p> The technology developed by prologistrust allows us to study the evolution of the main prologis assets and their price in different currencies and operate in the market using advanced algorithms. After years of research, we have optimized the system to obtain maximum profitability. Real-time monitoring and analysis of the prologis real estate stock assets and their price in different currencies Al algorithms developed to find the best opportunities Continuaus optimization and adaptation of the platform. </p>
                        <p> We have our own expert real estate agents which is proving to be very effective. a development team that updates the system to look for new opportunities. The greatest transparency in operations ever offered by an arbitrage company. A payment gateway that allows the instant withdrawal of profits and commissions, once accumulated $15 u.s. dollar. A perfect commission plan for those looking for a business opportunity. </p>
				        
                        <br>

                        <h3> Our Mission</h3>
						<p><strong>Prologistrust Mission Statement:</strong> We strive to be exemplary corporate citizens, minimize our environmental impacts, and maximize beneficial outcomes for our stakeholders. </p>
                   
                    </div>
                </div>

            
                <div class="col-md-12 padding-top-bottom" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="line-sep"></div>
				</div>

				<div class="col-md-4" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="concept-box">
						<div class="mb-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#187770" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
						</div>
						<h5>Benefits of Investing and Trading with PROLOGISTRUST</h5>
						<p>When you trade and invest in prologistrust, you are dealing with the prologis stock market.</p>
                       
                        <ul class="app-list mb-5 mt-4 text-left">
                            <li> prologis day-to-day transaction </li>
                            <li>  buying and selling of land and properties </li>
                            <li> the rise and fall of prologis stock/ holding and selling shares. </li>
                            <li> building and renting of apartment by your real estate agent. </li>
                           <li> daily compensation from the prologis warehouses and event centres, airport, E.TC... </li>

                         </ul>
					</div>
				</div>
                
				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.5s">
					<div class="concept-box">
						<div class="mb-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#187770" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
						</div>
						<h5>How does Stock Trading work ?</h5>
						<p> Prologistrust Stock trading is the buying and selling of a company’s shares with an aim to make a profit. When you buy shares in the company you own a small part of that company, and the value of your investment will change as the company’s share price moves up and down. </p>
					</div>
				</div>

				<div class="col-md-4 mt-4 mt-md-0" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.7s">
					<div class="concept-box">
						<div class="mb-4">
						<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#187770" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
						</div>
						<h5>Ways to Predict and Analyse the Prologis Stock ?</h5>
						<p>Investors make  information including the prologis company news and announcements, company results (earnings), and technical analysis to make decisions about which stocks to buy and when.</p>
                        <p>Once you’ve bought your investment you can log in anytime to monitor it and check the latest news and announcements. There’s no limit on how long you can hold your investment, and when you’re ready to sell simply login and click to sell instantly. You could then  that cash to make a new investment or return it to your bank account.</p>
					</div>
				</div>

				<div class="col-md-12 padding-top-bottom" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
					<div class="line-sep"></div>
				</div>
			</div>	
		</div>

		<div class="container">
			<div class="row">

                    <div class="col-md-12">
                        <div class="title-spread text-center">
                            <h3> PROLOGISTRUST Investment Agents Analysis </h3>
                            <p> Investment agents often used analyze changes in the prologis stock market by monitoring figures, such as interest rates, unemployment rates, gross domestic product (GDP), and other types of economic data that come out of prologis. For example, a agent conducting a fundamental analysis of the EUR/USD currency pair would find information on the interest rates in the Eurozone more useful than those in the U.S. Those agents would also want to be on top of any significant news releases coming out of each prologis transaction to gauge the relation to the health of their client or investor and each star agent put more effort than the other. Giving you a perfect daily return an increase in your finance.</p>
                        </div>
                    </div>
				
			</div>	
		</div>
			
	</div>

@endsection