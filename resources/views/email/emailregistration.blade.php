@extends('email.master')

@section('content')
	<tr>
	<td class="bg_white email-section" style="text-align:center; background-color: white">
		<div class="heading-section heading-section-dark">
		  <h2>Pendaftaran</h2>
		  <p style="color: black">Hai {{$data['namaDepan']}} {{$data['namaBelakang']}}, saat ini tim kami sedang memproses pendaftaran kamu, tim kami akan menghubungi kamu kembali saat terjadi perubahan status pendaftaran.</p>
		</div>
	</td>
  </tr><!-- end: tr -->
	
@endsection