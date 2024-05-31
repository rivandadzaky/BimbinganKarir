@extends('layout.periksapasien')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Periksa Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Periksa Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
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
                      <th>No Urut</th>
                      <th>Nama Pasien</th>
                      <th>Keluhan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  
                    <tr>
                      <th></th>
                      <td></td>
                      <td></td>
                      <td>
                        <a href="/tampiljadwal" class="btn btn-warning">Edit</a>
                      </td>
                    </tr>
                  
                  </tbody>
                </table>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection