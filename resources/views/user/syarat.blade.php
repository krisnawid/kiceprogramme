@extends('user.master')

@section('content')

<section class="contact-our-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms" style="margin-top: 50px;">
                    <h4>Syarat Dan Waktu Pendaftaran</h4>
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
                                        <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Syarat Dan Ketentuan</span></a>
                                    </li>
                                    <!-- Nav Item -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Procedure Process</span></a>
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
                                            <li class="list-group-item">1. Warga Negara Indonesia (WNI)</li>
                                            <li class="list-group-item">2. Pria/Wanita</li>
                                            <li class="list-group-item">3. Nilai Matematika dan Bahasa Inggris (umum/pengetahuan/teori/wajib) masing-masing minimal 80, pada semester IV dan V</li>
                                            <li class="list-group-item">4. Usia minimal 17 tahun dan tidak melebihi dari 21 tahun pada tanggal 31 Desember 2019</li>
                                            <li class="list-group-item">5. Sehat jasmani dan rohani, tidak buta warna, tidak cacat ﬁsik dan mental</li>
                                            <li class="list-group-item">6. Bagi pria tidak bertato/bekas tato dan tidak ditindik/bekas tindik telinganya atau anggota badan lainnya, kecuali yang disebabkan oleh ketentuan agama/adat</li>
                                            <li class="list-group-item">7. Bagi wanita tidak bertato/bekas tato dan tidak bekas tindik/bekas tindik anggota badan lainnya selain telinga</li>
                                            <li class="list-group-item">8. Ketentuan Selanjutnya</li>
                                            <li class="list-group-item">9. Ketentuan Selanjutnya</li>
                                            <li class="list-group-item">10. Ketentuan Selanjutnya</li>
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
                                                <td> Fill & Pay registration fee Rp. 85.000 to 7510328820 Bank BCA </td>
                                                <td> 11 January - 26 January </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">2</th>
                                                <td> Announcement for Phase 1 </td>
                                                <td> 14 February </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">3</th>
                                                <td> Social Video Project Submit </td>
                                                <td> 26 February </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">4</th>
                                                <td> Final announcement for IYLE “Edu Social Program” </td>
                                                <td> 2 Maret </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">5</th>
                                                <td> Interview selection for top 2 participants </td>
                                                <td> 17 Maret </td>
                                                </tr>
                                            </tbody>
                                            <tbody>
                                                <tr>
                                                <th scope="row">6</th>
                                                <td> Announcement for delegates who get fully funded program </td>
                                                <td> 23 Maret </td>
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