@extends('user.master')

@section('content')
    
<!-- Contact Area Start -->
<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms" style="margin-top: 50px;">
                    <h4>Join Us</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">

            <div class="col-12 col-sm-12">
                <!-- Contact Form -->
                <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                    <div class="contact_form">
                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                {{ $message }}
                            </div>
                        @endif

                        <form action="/joinus/proses" method="post" id="main_contact_form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="firstName" placeholder="First Name" value="{{ old('firstName') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="lastName" placeholder="Last Name" value="{{ old('lastName') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="email" placeholder="E-mail" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="whatsappNumber" placeholder="Whatsapp Number" value="{{ old('whatsappNumber') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="address" placeholder="Your Address" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Bukti Pembayaran</label>
                                            <input type="file" class="form-control mb-30" name="buktiPembayaran" style="border-bottom:0px">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label>Foto Diri</label>
                                            <input type="file" class="form-control mb-30" name="fotoDiri"  style="border-bottom:0px">
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn" data-toggle="modal" data-target="#modalProses">Send<i class="zmdi zmdi-long-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modalProses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registration Sending...</h5>
            </div>
            <div class="modal-body">
                Please wait, your registration is sending
            </div>
        </div>
    </div>
</div>



<!-- Contact Area End -->
@endsection
