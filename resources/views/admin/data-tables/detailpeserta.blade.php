@extends('admin.layout.master')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Data Peserta</h1>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active" aria-current="page">Biodata Dan Hasil Pembayaran</li>
              </ol>
            </div>
  
            <div class="row">
              <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Biodata Peserta dan Bukti Pembayaran</h6>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                          <div class="container">
                              <form>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Registration ID : </label>
                                      <div class="col-sm-10 ">
                                          <input type="text" rea  donly class="form-control-plaintext" id="staticEmail" value="1">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Nama Depan :</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="Nama Depan Peserta" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Nama Nelakang : </label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="Nama Belakang Peserta" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Email : </label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="Email Peserta" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Phone : </label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="No Telp Peserta" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Alamat : </label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" id="inputPassword" placeholder="Alamat Peserta" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Bukti Pembayaran : </label>
                                      <div class="col-sm-10">
                                          <label for=""><img src="" style="width: 400px; height: 400px;" alt=""></label>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="staticEmail" class="col-sm-2 col-form-label">Foto Peserta : </label>
                                      <div class="col-sm-10">
                                          <label for=""><img src="" style="width: 400px; height: 400px;" alt=""></label>
                                      </div>
                                  </div>
                              </form>
                          </div>                        
                      </thead>
                    </table>
                  </div>
                  <div class="card-footer"></div>
                </div>
              </div>
            </div>
            <!--Row-->
          </div>
          <!---Container Fluid-->
@endsection