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
                              <form action="/admin/{{$user->id}}/confirmdatauser" method="POST">
                                    {{ csrf_field() }}
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Registration ID : </label>
                                      <div class="col-sm-10 ">
                                          <input type="text" readonly class="form-control-plaintext" name="id_user" value="{{$user->id}}" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nama Depan :</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="nama_depan" value="{{$user->nama_depan}}" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nama Nelakang : </label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="nama_belakang" value="{{$user->nama_belakang}}" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Email : </label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="email" value="{{$user->email}}" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Phone : </label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="phone" value="{{$user->phone}}" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Alamat : </label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="alamat" value="{{$user->alamat}}" disabled>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Bukti Pembayaran : </label>
                                      <div class="col-sm-10">
                                          <label><img src="{{ url('/data_file/'.$user->bukti_pembayaran) }}" name="bukti_pembayaran" style="width: 400px; height: 400px;" alt=""></label>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Foto Peserta : </label>
                                      <div class="col-sm-10">
                                          <label><img src="{{ url('/data_file/'.$user->foto_peserta) }}" name="foto_peserta" style="width: 400px; height: 400px;" alt=""></label>
                                      </div>
                                  </div>
                                  {{-- <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Status : </label>
                                      <div class="col-sm-10">
                                          <select name="status" id="controlStatus" class="form-control">
                                              <option value="1" @if($user->status == 1) selected @endif>Konfirmasi</option>
                                              <option value="0" @if($user->status == 0 && $user->status == null ) selected @endif>Pending</option>
                                          </select>
                                      </div>
                                  </div> --}}
                                  <div class="form-group row">
                                      {{--<label class="col-sm-2 col-form-label">Status : </label>--}}
                                      <div class="col-sm-10">
                                          <input type="hidden" class="form-control" name="status" value="1">
                                      </div>
                                  </div>
                                  @if ($user->status == 1)
                                    <div class="alert alert-light text-center"><span class="badge badge-success">Data Sudah Terkonfirmasi</span></div>
                                    <a class="btn btn-danger btn-block" href="/admin/data-tables" >Back</a>
                                  @else
                                    <div class="alert alert-light text-center"><span class="badge badge-primary">Data Belum Terkonfirmasi</span></div>
                                    <button type="submit" data-toggle="modal" data-target="#modalKonfrimasi" class="btn btn-success btn-lg btn-block">Konfirmasi Data Registrasi</button>
                                    <a class="btn btn-danger btn-lg btn-block" href="/admin/data-tables" >Back</a>
                                  @endif
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

          <div class="modal fade" id="modalKonfrimasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Diproses</h5>
                    </div>
                    <div class="modal-body">
                        Tunggu sebentar konfirmasi sedang diproses
                    </div>
                </div>
            </div>
        </div>
@endsection