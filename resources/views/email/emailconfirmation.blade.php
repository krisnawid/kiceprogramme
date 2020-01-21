@extends('email.master')

@section('content')
	<tr>
		<td valign="middle" class="hero bg_white" style="background-image: url(https://kiceprogramme.com/img/new-bg.jpg
		); background-size: cover; height: 400px;">
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
		  <h2 style="color:white">Confirmed !!</h2>
		  <p style="color: white">Hi 
			{{-- {{$data['namaDepan']}} {{$data['namaBelakang']}}, --}}
			congratulations! We have validated the registration. For those of you who register as a self funded program, please fill out the registration form below : <a href="https://docs.google.com/forms/d/e/1FAIpQLScznQmtEigyH8zOiM_X5C6vQiwbz9oyK9A880iAAVjYLajzGg/viewform" style="color: blueviolet; text-decoration: underline;">Self funded form</a><br>
			For those of you who are taking part in a fully funded and partial funded program, please prepare an essay that contains your bright ideas and your future targets as future leaders. collect the essay in the following link: <br>
			<a href="https://forms.gle/zXtrmCmigUKAMYVp7" style="color: blueviolet; text-decoration: underline;">Fully funded and partial funded form</a><br>
			*attention! the registration limit is March 1, 2020
		</div>
	</td>
  </tr><!-- end: tr -->
	
@endsection