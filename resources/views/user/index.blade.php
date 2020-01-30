@extends('user.master')

@section('content')
     <!-- Welcome Area Start -->
     <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/user/bg-img/malay1.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Kakatoo International <br>Culture and Education Exchange</h2>
                                <h6 data-animation="fadeInUp" style="margin-bottom:0;" data-delay="500ms">Kuala Lumpur, Malaysia</h6><br>
                                <h6  style="margin-bottom:0;"> 22 - 25 {{ __('June')}} 2020 </h6><br>
                                <h6> {{ __('Last Registration') }} 28 {{ __('February') }} 2020</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="/joinus" class="btn confer-btn"> {{ __('Register') }} <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="program">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">{{ __('Program Description') }}</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">{{ __('Program Goals') }}</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">{{ __('Goals of this program are to provide delegates with insights into culture and education in other countries.') }}
                            <br><br>
                        {{ __('KICE offers practice soft skills and interact directly with local communities by providing solutions for their problems or develop local communities potential. Delegates will be prepared to be leaders who have an impact both for global society and environment.') }}    
                        </p>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('img/user/bg-img/malaysia.png') }}" alt="" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url({{ asset('img/user/bg-img/3.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Program</p>
                        <h4>Program Details</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/cam.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">{{ __('The delegation will visit famous campuses in the country to get to know various campus activities in producing the next leaders in the country') }}</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Campus</h5>
                            <p>Visit</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/cul1.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">{{ __("The delegates will introduce each other's culture together with the surrounding community in the country") }}</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Cultural</h5>
                            <p>Exchange</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/tha21.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">{{ __('The delegation will discuss with students in the country with the theme of educational development and cultural inculcation') }}</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sharing</h5>
                            <p>Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/solv.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">{{ __('The delegation looks for problems in the country or problems in the country of origin to provide solutions based on the discussions and observations obtained during the program') }}</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Global Problem</h5>
                            <p>Solving</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/malay2.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;"> {{ __('The delegation will visit places that become an icon of the country and contain historical and cultural values') }}</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>City</h5>
                            <p>Tour</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/show.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">{{ __("The delegation will perform with his team to win the best performance award that reflects the team's cohesiveness during the program" ) }}</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Gathering</h5>
                            <p>Night</p>
                        </div>
                    </div>
                </div>
                

                <div class="col-12 col-md-6 col-lg-4"></div>

                <div class="col-12 col-md-6 col-lg-4" style="text-align: center">
                    <a href="/joinus" class="btn register-btn">{{ __('Register')}} <i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>

                <div class="col-12 col-md-6 col-lg-4"><div>
            </div>

        </div>
    </section>
    <!-- Our Speakings Area End -->

    <!-- Our Schedule Area Start -->
    <section class="our-schedule-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Schedule</p>
                        <h4 style="color: black">Program Rundown</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">{{ __('Monday') }} <br> <span>{{ __('June') }} 22, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">{{ __('Tuesday')}} <br> <span>{{ __('June') }} 23, 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">{{ __('Wednesday')}} <br> <span>{{ __('June') }} 24, 2020</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#step-four" role="tab" aria-controls="step-four" aria-expanded="true">{{ __('Thursday')}} <br> <span>{{ __('June') }} 25, 2020</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/arp.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Airport Pick Up') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>12.00 - 14.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hot.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Transfer to Hotel & Check In') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>14.00 - 16.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hal.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Free Time</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} <span>16.00 - 19.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hot.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Rest') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>21.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/mkn.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Breakfast') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>07.00 - 08.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/kbri.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Going to Indonesia Embassy (KBRI)') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>08.00 - 11.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/bgo.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Campus Visit') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i>{{ __('Time') }} : <span>11.00 - 13.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/orp.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6> {{ __('Discussion with campus community') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>13.00 - 16.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hal.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Free Time</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>16.00 - 19.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hal.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Night Market') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>19.00 – 21.00 </p>
                                            </div>
                                        </div>


                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hot.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Rest') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>21.00</p>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/mkn.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Breakfast') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>07.00 - 08.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/miss.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Social exchange mission') }} </h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>08.00 – 16.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hal.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Free Time</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>16.00 - 19.00</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/res.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Gala Dinner') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>19.00 – 21.00 </p>
                                            </div>
                                        </div>


                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/hot.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Rest') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> {{ __('Time') }} : <span>21.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-four" role="tabpanel" aria-labelledby="thursday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/arp.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>{{ __('Transfer to Airport') }}</h6>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i>{{ __('Time') }} : <span>07.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Schedule Area End -->

    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-60 jarallax" style="background-image: url({{ asset('img/user/bg-img/14.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Program Fee</p>
                        <h4>Ticket Pricing</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Fully Funded</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('img/user/core-img/p1.png') }}" alt="">
                        </div>
                        <br>
                        <h2 class="ticket-price"><span></span>Free</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p>{{ __('Applicants with the best selection results will join the entire program for free. Fully funded is given to applicants who can provide maximum sustainable impact to the world after participating in the program.')}} </p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Partial Funded</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('img/user/core-img/p2.png') }}" alt="">
                        </div>
                        <br>
                        <h2 class="ticket-price"><span>Rp.</span>2.000K</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p>{{ __('Applicants with good ideas that have a good impact on their country of origin will be given the opportunity to get a partial funded program. with the hope that this program can help realize their bright ideas.') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Self Funded</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('img/user/core-img/p3.png') }}" alt="">
                        </div>
                        <br>
                        <h2 class="ticket-price"><span>Rp.</span>3.500K</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p>{{ __('Self-funded delegations are registrations for delegates without selection by the committee. the benefits obtained are the same as fully funded and partial funded delegations') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4"></div>

                <div class="col-12 col-md-6 col-lg-4" style="text-align: center">
                    <a href="/procedure" class="btn register-btn">{{ __('How To Get It')}} ? <i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>

                <div class="col-12 col-md-6 col-lg-4"><div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->


    <!-- <section class="our-blog-area section-padding-100-60" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p style="color: #000000;">Our Blog</p>
                        <h4 style="color: #000000;">Testimoni</h4>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        
                        <div class="single-blog-thumb">
                            <img src="{{ asset('img/user/bg-img/18.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Street Food Convention</a>
                            
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        
                        <div class="single-blog-thumb">
                            <img src="{{ asset('img/user/bg-img/19.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Tedx Moscow Conference</a>
                            
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        
                        <div class="single-blog-thumb">
                            <img src="{{ asset('img/user/bg-img/20.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Los Angeles Institute</a>
                            
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i>January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i>Laura Green</a>
                            </div>
                            <p>Street Food Convention will showcase products like Packed food, beef and lamb, street food.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Our Blog Area End -->

    <!-- Contact Area Start -->
    
    <!-- Contact Area End -->
@endsection

   