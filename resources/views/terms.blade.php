@extends('Layouts.home')

@section('title')
	Terms and Conditions
@endsection

@section('content')
	<!-- Primary Page Layout
	================================================== -->

	<div class="section padding-top-bottom-big text-center">
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
		<h3>Terms and Conditions</h3>
	</div>
	
	
	<div class="section padding-top-bottom-big" id="contact">
		<div class="background-parallax" style="background-image: url('img/parallax-4.jpg')" data-enllax-ratio=".5" data-enllax-type="background" data-enllax-direction="vertical"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-wrap text-center">
						<div class="back-title">Terms</div>
						<h3>Terms and Conditions</h3>
					</div>
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
				
				<p>

<p>These terms of service govern your access and use prologistrust.com (the ‘website’) and the purchase of any services offered (‘services’). Please read carefully before purchasing any service, should you not agree with any clause contained within these terms then please do not continue to purchase from prologistrust as you will be bound by the said provision contained here within.</p>

<p class="text-bold">Standard terms and conditions of business.</p>

<p>This document (referred to as ‘agreement’ or ‘contract’) forms an agreement that becomes binding between the person, company, firm or other legal entity (referred to as ‘you’ or ‘user’) on the date of using the website and/or purchasing services.</p>

<p>These Terms apply to all services that we provide and may be amended or terminated at any time. Any termination or amendment will be effective from the date the amended version is posted onto our website. The revised date will indicate the last amendment. Continuous use of the services after the date of amendment will signify your acceptance of the revised terms.</p>

<p>Where services are accepted and/or purchased on behalf of a company or other legal entity you confirm that you have the authority to enter into such an agreement with us.</p>

<p>Any person under the age of 18 is not permitted to use or purchase of services.</p>

<p>Third Party (referred to as ‘third party’) means person, group or company beside the two main people/companies or legal entities involved in this agreement. We do not accept responsibility or liability in any way of any act or omission provided or quality of service, content or publications provided by the third party in question.</p>

<p>Any security and privacy practices or policies stated by third party websites are referred to on their own websites; please ensure to view such documentation accordingly.</p>

<p>Should we believe that the user has breached any of these terms we will take necessary action, which may include the temporary suspension or even deletion of your account, prohibit your access to (purchase) services. Alternatively, we may report you to authorities, the police and/or commence legal proceedings against you.</p>

<p>Fees</p>

<p>Services are provided subject to the applicable service fee (‘fees’) payable by the user.</p>

<p>We shall invoice you 100% of the fee upon your online order.</p>

<p>Fees are payable by Visa,Bitcoin,Ethereum,USD tether Transfer. The user should also enter their payments proof inorder to prevent delays in their purchase.</p>

<p>Note services will not be provided until funds have cleared.</p>

<p>Our fees are subject to change without prior notice. Such changes will be available to the user via our website. Where necessary, we will request consent from the user to the amendment of any such fees.</p>

<p>Please note that payments processed via Visa,Bitcoin,Ethereum,USD tether (a third party payment processor) who may collect information and personal data from the user. The user is responsible for ensuring that such data and payment information is correct to pay for the services requested. We accept no liability for payments that do not reach us due to incorrect information being submitted or for the refusal of payment via Visa,Bitcoin,Ethereum,USD tether,Litecoin or Perfect money.</p>

<p>Once the payment has been submitted we will verify the payment if its valid before the particular can be offered.</p>

<p>Refunds are permitted after 10days of user using our services if he or she finds our service not satisfying. Any profit given to the user which he or she has withdrawn prior to services being provided may be deducted of an administration fee. Refunds will be issued via the same payment method that was used to purchase the service.</p>

<p>Cancellation of user accounts may be done by contacting info@prologistrust.com</p>


<p>User responsibilities</p>

<p>The user agrees to review these terms in conjunction with our privacy policy. The user may use our services if register for a user account on our website.</p>

<p>The user is responsible for their own username and password and must not disclose this information to anyone. This information is confidential and the is responsible for any breach or such information as well as any acts on your account as a result of such a breach.</p>

<p>The user is responsible for ensuring they are using a secure internet connection when accessing our website.</p>

<p>We are not liable for any loss or damage as a result of not using a secure internet access and consequently not protecting yourself from viruses, malware, Trojans horses or other destructive content when accessing our website.</p>

<p>We may, at our discretion, suspend, disable or delete your account with us if we have reason to believe you have breached any term of this agreement or that your conduct causes damage to our company reputation or goodwill.</p>

<p>Following Clause 34, you will not be allowed to re-register; we will terminate any account attempting to do so.</p>

<p>We may also suspended or terminate accounts by the lawful request of any public authority.</p>


<p>Acceptable use policy</p>

<p> By using prologistrust you are agreeing that you: </P>

<p>Will comply with these terms and all applicable laws; </p>

<p>Will provide accurate and up to date information; </p>

<p>Will not use our website for immoral, illegal, abusive or offensive reasons;</P>

<p>Will not spread falsenews, or spam; </p>

<p>Will notify us immediately at info@prologistrust.com of any content related to prologistrust that is inappropriate and/or infringes any laws so that we may investigate further;</p>

<p>Are responsible for any claims brought against you resulting from your use of prologistrust and you indemnify us against all claims arising from your use of our website.</P>


<p>Termination, Modification, interruption and Force majeure. </p>

<p>We reserve the right to modify or terminate prologistrust with or without notice to the user. </p>

<p>We shall not be liable to the user or any third party should we wish to modify or terminate prologistrust </p>

<p>The user acknowledges and accepts that we do not guarantee continuous, uninterrupted or secure access to prologistrust and the operation of the same.</p>

<p>We may decide to stop our service to you, without notice, as a result of circumstances out of our control such as (but not exhaustive) impossibility of performance,epidemic, pandemic, legislation, power failure, lock-out or strike, providing incorrect information which we have relied on, material breach of your obligations to us. Should this occur then you are liable for our charges and expenses up to the point of us notifying you of our intentions.</p>

<p>Data protection</p>

<p>We will not disclose to any third party any personal data without your consent unless requested in accordance by agencies or for regulatory purposes.</p>

<p>Complaints procedure</p>

<p>If for any reason you are dissatisfied with the service provided, you should first of all refer it to Complaints Team at info@prologistrust.com or to our registered address who will investigate and take appropriate action.</p>


<p>Law and Jurisdiction</p>

<p>These terms of business are subject to the laws of United States Any dispute or legal issue shall be subject to the exclusive jurisdiction of the Courts. Should a court rule that any clause within these Terms are invalid/unenforceable this will not affect the validity of the rest of the Terms, which will remain in force.</p>

<p>In the event of a dispute, we are willing to consider Mediation or Arbitration. The cost of the proceedings, disbursements, facilities and fees to be split between the parties. However, subject to the applicable Arbitration legislation, the Arbitrator may determine who shall be responsible for the costs of the Arbitration and shall set out that determination in any Award.</p>

<p>Contact information </p>

<p>If you have any queries about these terms of use please feel free to contact us.</p>

</p>
			
			</div>
			
		</div>
	</div>
@endsection