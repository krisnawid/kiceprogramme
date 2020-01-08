@extends('admin.layout.master')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Registration User</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active" aria-current="page">Data Registration User</li>
        </ol>
      </div>

      <div class="row">
        <div class="col-lg-12 mb-4">
          <!-- Data Registration User -->
          <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Data Registration User</h6>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>Registration ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_user as $user)
                  <tr>
                    <td><a href="#">{{$user->id}}</a></td>
                    <td>{{$user->nama_depan}} {{$user->nama_belakang}}</td>
                    <td>{{$user->email}}</td>
                    {{-- <td><span class="badge badge-success">Success</span></td> --}}
                    @if ($user->status == 0)
                      <td><span class="badge badge-primary">Pending</span></td>    
                    @elseif ($user->status == 1)
                      <td><span class="badge badge-success">Success</span></td>
                    @else
                      <td><span class="badge badge-danger">Reject</span></td>
                    @endif
                    <td><a href="/admin/{{$user->id}}/detaildatauser" class="btn btn-sm btn-primary">Detail</a></td>
                  </tr>
                  @endforeach
                </tbody>
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