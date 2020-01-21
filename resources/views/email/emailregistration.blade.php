@extends('email.master')

@section('content')
	<tr>
		<td valign="middle" class="hero bg_white" style="background-image: url(https://www.zikanews.com/sites/default/files/styles/article/public/city-1283140.jpg); background-size: cover; height: 400px;">
			<div class="overlay"></div>
		<table>
			<tr>
				<td>
					<div class="text" style="text-align: center; color: white">
						<h2>Kakatoo International</h2> 
							<h2>Culture and Education Exchange</h2>
					</div>
				</td>
			</tr>
		</table>
		</td>
	</tr><!-- end tr -->
	<tr>
	<td class="bg_white email-section" style="text-align:center; background-color: white; background-image: -webkit-linear-gradient(333deg, rgba(11,179,244,1) 44%, rgba(45,236,10,1) 100%)">
		<div class="heading-section heading-section-dark">
		  <h2 style="color:white">Received !!</h2>
		  <p style="color: white">Hi 
			{{-- {{$data['namaDepan']}} {{$data['namaBelakang']}}, --}}
			we have received your data,
			then upload the twibbon that we provide at the following link:</p><a href="https://drive.google.com/open?id=1p3nF5toQSHG1utB06Po3DCd8OSje5CmA" style="color: blueviolet; text-decoration: underline; font-size: large">Here</a><p style="color: white">
			Download and upload twibon to your Instagram account with your creative text with the <a href="https://www.instagram.com/kiceprogramme/" style="color: indigo"> @kiceprogramme </a>tag and follow the Instagram account KICEProgramme to get the latest info from us</p>
		</div>
	</td>
  </tr><!-- end: tr -->
	
@endsection