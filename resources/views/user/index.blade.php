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
                                <h6 data-animation="fadeInUp" data-delay="500ms">Kuala Lumpur, Malaysia</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn confer-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
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
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">Program Description</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Program Goals</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">The goals of this program is to increase social humanity awareness, learn about social enterprise and its impact, develop leadership and build the character through challenging situation, also to enhance youth’s leadership skills by giving them challenging intercultural environment and cultures through activities that cultivating teamwork, social awareness peaceful, and a sense of unity among young leaders.

                            At the end of this program, we want all delegates can make an impact in their homes, communities, among their peers and, most importantly, within themselves by leaving with a better knowledge from this program.</p>
                        <a href="/joinus" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Join Us <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('img/user/bg-img/pen.jpg') }}" alt="" >
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
                            <img src="{{ asset('img/user/bg-img/tha2.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">Delegates will explore Bangkok City in a different way with several challenges given. Feel the multicultural environment through city exploration.</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Survival</h5>
                            <p>Chellenge</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/mala3.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">Strengthen Leadership and Social awareness of the humanity especially with people with disabilities by doing social works in multicultural environment and learn about social enterprise and its impact.</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Social</h5>
                            <p>Expeditions</p>
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
                            <p style="color: white;">Delegates will be divided into some groups and discuss topic and their experience since they are in Bangkok, Thailand</p>
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
                            <img src="{{ asset('img/user/bg-img/cul1.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">Delegates will have an intercultural and interfaith experience during program from direct interaction with local people, and also broaden their international relations.</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Cultural Exchange</h5>
                            <p>Program</p>
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
                            <p style="color: white;">Delegates will visit historical site destination in Bangkok, Thailand, and taste famous street food.</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>City</h5>
                            <p>Trip</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('img/user/bg-img/tha20.jpg') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <p style="color: white;">Delegates will have special dinner at the end of program and the committee will give reward for best delegate and best group performing.</p>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Gala</h5>
                            <p>Dinner</p>
                        </div>
                    </div>
                </div>
                <a href="/joinus" class="btn confer-btn">Register <i class="zmdi zmdi-long-arrow-right"></i></a>
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
                        <h4>Program Rundown</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Monday <br> <span>April 14, 2019</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Tuesday <br> <span>April 15, 2019</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Wednesday <br> <span>April 16, 2019</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#step-four" role="tab" aria-controls="step-four" aria-expanded="true">Thursday <br> <span>April 17, 2019</span></a>
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
                                                    <h6>Airport Pick Up</h6>
                                                    <p>Time : <span>12.00 - 13.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Bandar Udara Internasional Kuala Lumpur , Selangor , Malaysia</p>
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
                                                    <h6>Transfer to Hotel</h6>
                                                    <p>Time : <span>13.00 - 14.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Check-In Hotel</h6>
                                                    <p>Time : <span>13.00 - 14.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Free Time</h6>
                                                    <p>Time : <span>14.00 - 16.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Welcoming night & Bonding time</h6>
                                                    <p>Time : <span>18.00 - 21.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i>  Hall SDoubleTree Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Rest</h6>
                                                    <p>Time : <span>22.00 - 21.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Breakfast</h6>
                                                    <p>Time : <span>06.00 - 07.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Hilton Hotel Restaurant, Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Going to Indonesia Embassy(KBRI)</h6>
                                                    <p>Time : <span>07.00 - 08.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Jalan Tun Razak, Kuala Lumpur , Malaysia</p>
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
                                                    <h6>NGO Visit</h6>
                                                    <p>Time : <span>10.00 - 12.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Wilayah Persekutuan Putrajaya, Malaysia</p>
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
                                                    <h6>Orphanage Visit</h6>
                                                    <p>Time : <span>12.00 - 14.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Petaling Jaya, Selangor, Malaysia</p>
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
                                                    <h6>Back To Hotel</h6>
                                                    <p>Time : <span>14.00 - 14.30</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Free Time(CleanUp / Rest)</h6>
                                                    <p>Time : <span>14.30 - 16.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Dinner</h6>
                                                    <p>Time : <span>18.00 - 19.00</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Hilton Hotel Restaurant, Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Back to Hotel</h6>
                                                    <p>Time : <span>19.00 - 19.30</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Rest</h6>
                                                    <p>Time : <span>21.00 - 05.30</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <h6>Breakfast</h6>
                                                    <p>Time : <span>07.00 - 08.00</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Hilton Hotel Restaurant, Kuala Lumpur , Malaysia</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/sur.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Malay Survival Challange</h6>
                                                    <p>Time : <span>07.00 - 08.00</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Pekan Sibu, Sibu, Sarawak, Malaysia</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/psr.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Free Time</h6>
                                                    <p>Time : <span>08.00 - 09.30</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Lorong Air Putih 86, Pahang, Malaysia</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/cul.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Cultural Show & Awards Night</h6>
                                                    <p>Time : <span>17.00 - 22.30</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i>  Ministry Of Tourism, Arts & Culture, Putra Jaya, Malaysia</p>
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
                                                    <h6>Rest</h6>
                                                    <p>Time : <span>22.00 - 05.30</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i>  SDoubleTree by Hilton Hotel , Kuala Lumpur , Malaysia</p>
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
                                                    <img src="{{ asset('img/user/bg-img/hot.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Breakfast</h6>
                                                    <p>Time : <span>06.00 - 07.00</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Hilton Hotel Restaurant, Kuala Lumpur , Malaysia</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/tou.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>KL City Tour</h6>
                                                    <p>Time : <span>07.00 - 08.30</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Kuala Lumpur Mall , Kuala Lumpur, Malaysia</p>
                                            </div>
                                        </div>

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
                                                    <h6>Transfer To Airport</h6>
                                                    <p>Time : <span>08.00 - 09.30</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Bandar Udara Internasional Kuala Lumpur , Selangor , Malaysia</p>
                                            </div>
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('img/user/bg-img/ind.jpg') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Back To Indonesia</h6>
                                                    <p>Time : <span>16.00</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Soekarno-Hatta Airport, Jakarta, Indonesia</p>
                                            </div>
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
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url({{ asset('img/user/bg-img/14.jpg') }});">
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
                        <h6 class="ticket-plan">Fully Founded</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('img/user/core-img/p1.png') }}" alt="">
                        </div>
                        <br>
                        <h6>(16 Jan – 4 Feb)</h6>
                        <h2 class="ticket-price"><span></span>Free</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Partial Founded</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('img/user/core-img/p2.png') }}" alt="">
                        </div>
                        <br>
                        <h6>(5 Feb-22 Feb)</h6>
                        <h2 class="ticket-price"><span>Rp.</span>2.000K</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Self Founded</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="{{ asset('img/user/core-img/p3.png') }}" alt="">
                        </div>
                        <br>
                        <h6>(22 Feb-3 Mar)</h6>
                        <h2 class="ticket-price"><span>Rp.</span>3.500K</h2>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

    <!-- Our Blog Area Start -->
    <section class="our-blog-area section-padding-100-60" style="background-color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p style="color: #000000;">Our Blog</p>
                        <h4 style="color: #000000;">Testimoni</h4>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('img/user/bg-img/18.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Street Food Convention</a>
                            <!-- Post Meta -->
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

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('img/user/bg-img/19.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Tedx Moscow Conference</a>
                            <!-- Post Meta -->
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

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('img/user/bg-img/20.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Los Angeles Institute</a>
                            <!-- Post Meta -->
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
    </section>
    <!-- Our Blog Area End -->

    <!-- Contact Area Start -->
    
    <!-- Contact Area End -->
@endsection

   