@extends('layout.poli')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Poli</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
              <a href="/poli" class="breadcrumb-item active">Pasien</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <form action="/editpoli/{{ $data->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Poli</label>
            <input type="text" name="nama_poli" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Poli" value="{{ $data->nama_poli }}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="exampleInputPassword1" placeholder="keterangan" value="{{ $data->keterangan }}">
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