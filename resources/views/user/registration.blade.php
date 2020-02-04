@extends('user.master')

@section('content')
    
<!-- Contact Area Start -->
<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms" style="margin-top: 50px;">
                    <h4>{{ __('Join Us')}}</h4>
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

                        <form action="/{{app()->getLocale()}}/joinus/proses" method="post" id="main_contact_form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="firstName" placeholder="{{ __('First Name')}}" value="{{ old('firstName') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="lastName" placeholder="{{ __('Last Name')}}" value="{{ old('lastName') }}">
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
                                            <input type="text" class="form-control mb-30" name="whatsappNumber" placeholder="{{ __('Whatsapp Number')}}" value="{{ old('whatsappNumber') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="address" placeholder="{{ __('Your Adress')}}" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('Proof of Payment')}}</label>
                                            <br>
                                            <small style="margin-left:8px; color:grey">*{{ __('Look At The Procedure') }}</small>
                                            <input type="file" class="form-control mb-30" name="proofOfPayment" style="border-bottom:0px">
                                        </div>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('Photo Profile')}}</label>
                                            <input type="file" class="form-control mb-30" name="photoProfil"  style="border-bottom:0px">
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-12">
                                        <button type="submit" class="btn confer-btn" data-toggle="modal" data-target="#modalProses">{{ __('Send')}}<i class="zmdi zmdi-long-arrow-right"></i>
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
