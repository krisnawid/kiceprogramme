@extends('user.master')

@section('content')

<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms" style="margin-top: 50px;">
                    <h4>{{ __('Program Registration Procedure')}}</h4>
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
                                        <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">{{ __('Terms and Conditions') }}</span></a>
                                    </li>
                                    <!-- Nav Item -->
                                    <li class="nav-item">
                                    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">{{ __('Important Schedule') }}</span></a>
                                    </li>
                                    <!-- Nav Item -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="tuesday1-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-two" aria-expanded="true">{{ __('How to get Fully funded , Partial Funded & Self Funded')}}</span></a>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                                    <div class="single-tab-content">
                                        <ul class="list-group">
                                            <li class="list-group-item">1. {{ __('Applicants are Indonesian citizens (applicants from other countries must contact the committee at hello@kiceprogramme.com)')}}</li>
                                            <li class="list-group-item">2. {{ __('This program only accepts applicants aged between 16 to 25 years')}}</li>
                                            <li class="list-group-item">3. {{ __('This program includes accommodation for departing from the country of origin to return to his country, consumption, and place to stay') }}</li>
                                            <li class="list-group-item">4. {{ __('Passports and visas are the responsibility of each elected delegate, the committee does not cover the costs of making passports and visas.') }}</li>
                                            <li class="list-group-item">5. {{ __('Able to read, speak, and write English at least in the basic level') }}</li>
                                        </ul>
                                    </div>
                                </div>
                        

                                <!--procedure Process-->
                                <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                                    <div class="single-tab-content">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">{{ __('No') }}</th>
                                                <th scope="col">{{ __('State') }}</th>
                                                <th scope="col">{{ __('Date') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">1</th>
                                                <td> {{ __('Fill & Pay registration fee Rp. 85.000 to BNI Account OTEBE Smart 0525837420') }}</td>
                                                <td> {{ __('27 January – 28 February') }}</td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td> {{ __('The deadline for collecting fully funded and partial funded files')}} </td>
                                                <td> 1 {{ __('March') }} </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td> {{ __('Phase 1 announcement') }}  </td>
                                                <td> 8 {{ __('March') }} </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">4</th>
                                                <td> {{ __('The deadline for Re-registration 1')}}  </td>
                                                <td> 15 {{ __('March') }} </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">5</th>
                                                <td> {{ __('Phase 2 announcement')}}  </td>
                                                <td> 22 {{ __('March') }} </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">6</th>
                                                <td> {{ __('The deadline for re-registration 2')}}  </td>
                                                <td> 29 {{ __('March') }} </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">7</th>
                                                <td> {{ __('Interview selection to get fully funded')}} </td>
                                                <td> 4 April </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">8</th>
                                                <td> {{ __('Announcement of delegates who get fully funded')}} </td>
                                                <td> 11 April </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">9</th>
                                                <td> {{ __('Goes to Malaysia')}} </td>
                                                <td> 22 – 25 {{ __('June') }} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!--how To Get-->
                                <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="tuesday1-tab">
                                    <div class="single-tab-content" >
                                        <ul class="list-unstyled">
                                            <li class="media">
                                                <div class="media-body">
                                                <h5 class="mt-0 mb-1"> - Fully Funded</h5>
                                                {{ __('Applicants with the best selection results will join the entire program for free. Fully funded is given to applicants who can provide maximum sustainable impact to the world after participating in the program.') }} 
                                                </div>
                                            </li>
                                            <br>
                                            <li class="media-body">
                                                <h5 class="mt-0 mb-1"> - Partial Funded</h5>
                                                {{ __('Applicants with good ideas that have a good impact on their country of origin will be given the opportunity to get a partial funded program. with the hope that this program can help realize their bright ideas.') }}
                                                </div>
                                            </li>
                                            <br>
                                            <li class="media-body">
                                                <h5 class="mt-0 mb-1"> - Self Funded</h5>
                                                {{ __('Self-funded delegations are registrations for delegates without selection by the committee. the benefits obtained are the same as fully funded and partial funded delegations') }}
                                                </div>
                                            </li>
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