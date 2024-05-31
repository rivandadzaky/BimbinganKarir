@extends('layout.jadwalperiksa')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Jadwal Periksa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
              <a href="/jadwalperiksa" class="breadcrumb-item active">Jadwal Periksa</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        <form action="insertjadwal" method="post" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hari</label>
            <select class="form-select" name="hari" aria-label="Default select example">
              <option selected>Pilih Jadwal Hari</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jumat">Jumat</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" id="exampleInputPassword1" placeholder="Jam Mulai">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" id="exampleInputPassword1" placeholder="Jam Selesai">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>

        <!-- card header table
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title">Obat</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                     <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                     <div class="input-group-append"> 
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
               card header table -->

              
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