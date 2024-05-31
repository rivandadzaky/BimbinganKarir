@extends('layout.profile')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
              <a href="/Profile" class="breadcrumb-item active">Profile Dokter</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <br>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Data Dokter</h3>
            <br>
              <form action="" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Dokter</label>
                <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat Dokter</label>
                <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telepon Dokter</label>
                <input type="text" name="" class="form-control" id="exampleInputPassword1" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
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