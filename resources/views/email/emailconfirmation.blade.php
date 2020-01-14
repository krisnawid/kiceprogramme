@extends('email.master')

@section('content')
	<tr>
	<td class="bg_white email-section" style="text-align:center; background-color: white">
		<div class="heading-section heading-section-dark">
		  <h2>Pendaftaran Berhasil</h2>
		  <p style="color: black">Hai {{$data['namaDepan']}} {{$data['namaBelakang']}}, pendaftaranmu telah diberhasil diverifikasi oleh tim kami.</p>
		</div>
	</td>
  </tr><!-- end: tr -->
	
@endsection