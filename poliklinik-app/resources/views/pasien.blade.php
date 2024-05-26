@extends('layout.pasien')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah / Edit Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
              <li class="breadcrumb-item active">Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <form action="/insertpasien" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="alamat">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No KTP</label>
            <input type="number" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="No KTP">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No Hp</label>
            <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No Hp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">No rm</label>
            <input type="number" name="no_rm" class="form-control" id="exampleInputPassword1" placeholder="No rm">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->

                    <!-- <div class="input-group-append"> 
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>-->
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <!-- table -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pasien</th>
                      <th>Alamat</th>
                      <th>No KTP</th>
                      <th>No Hp</th>
                      <th>No Rm</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($data as $row)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->alamat }}</td>
                      <td>{{ $row->no_ktp }}</td>
                      <td>{{ $row->no_hp }}</td>
                      <td>{{ $row->no_rm }}</td>
                      <td>
                        <a href="/tampilpasien/{{ $row->id }}" class="btn btn-success">Edit</a>
                        <a href="/hapuspasien/{{ $row->id }}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->    
  </div>

  @endsection