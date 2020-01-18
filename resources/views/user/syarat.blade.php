@extends('user.master')

@section('content')

<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms" style="margin-top: 50px;">
                    <h4>Program Registration Procedure</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-between">

            <div class="col-12 col-sm-12">
                <!-- Contact Form -->
                <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                    <div class="contact_form">
                        <div class="about-content-text mb-80">
                            <div class="schedule-tab">
                                <!-- Nav Tabs -->
                                <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Terms and Conditions</span></a>
                                    </li>
                                    <!-- Nav Item -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Important Schedule</span></a>
                                    </li>
                                    <!-- Nav Item -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="tuesday1-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-two" aria-expanded="true">How to get Fully funded , Partial Funded & Self Funded</span></a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                                    <div class="single-tab-content">
                                        <ul class="list-group">
                                            <li class="list-group-item">1. Applicants are Indonesian citizens (applicants from other countries must contact the committee at hello@kiceprogramme.com)</li>
                                            <li class="list-group-item">2. This program only accepts applicants aged between 16 to 24 years</li>
                                            <li class="list-group-item">3. This program includes accommodation for departing from the country of origin to return to his country, consumption, and place to stay</li>
                                            <li class="list-group-item">4. Passports and visas are the responsibility of each elected delegate, the committee does not cover the costs of making passports and visas.</li>
                                            <li class="list-group-item">5. Able to read, speak, and write English at least in the basic level</li>
                                        </ul>
                                    </div>
                                </div>
                        

                                <!--procedure Process-->
                                <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                                    <div class="single-tab-content">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">State</th>
                                                <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td> Fill & Pay registration fee Rp. 85.000 to BNI Account OTEBE Smart 0525837420 </td>
                                                <td> 27 January – 28 February </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td> The deadline for collecting fully funded and partial funded files </td>
                                                <td> 1 March </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td> Phase 1 announcement  </td>
                                                <td> 8 March </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">4</th>
                                                <td> The deadline for Re-registration 1  </td>
                                                <td> 15 March </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">5</th>
                                                <td> Phase 2 announcement  </td>
                                                <td> 22 march </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">6</th>
                                                <td> The deadline for re-registration 2  </td>
                                                <td> 29 March </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">7</th>
                                                <td> Interview selection to get fully funded   </td>
                                                <td> 4 April </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">8</th>
                                                <td> Announcement of delegates who get fully funded    </td>
                                                <td> 11 April </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">9</th>
                                                <td> Goes to Malaysia    </td>
                                                <td> 22 – 25 June </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--how To Get-->
                                <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="tuesday1-tab">
                                    <div class="single-tab-content" >
                                        <ul>
                                            <li class="zmdi zmdi-dot-circle-alt" style="font-size: 25px">  Fully Funded</li>
                                            <br>
                                            <p class="zmdi zmdi-quote" style="font-size: 20px"> Direct program is becoming delegates with any selection, but the students through all off test. <span class="zmdi zmdi-quote"></span></p>
                                            <br>
                                            <li></li>
                                            <br>
                                            <li class="zmdi zmdi-dot-circle-alt" style="font-size: 25px">  Partial Funded</li>
                                            <br>
                                            <p class="zmdi zmdi-quote" style="font-size: 20px"> Direct program is becoming delegates with any selection, but didn't through all off test. <span class="zmdi zmdi-quote"></span></p>
                                            <br>
                                            <li></li>
                                            <br>
                                            <li class="zmdi zmdi-dot-circle-alt" style="font-size: 25px">  Self Funded</li>
                                            <br>
                                            <p class="zmdi zmdi-quote" style="font-size: 20px"> Direct program is becoming delegates without any selection, just fill the online registration and pay for  the fee  program. <span class="zmdi zmdi-quote"></p>
                                        </ul>
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


@endsection