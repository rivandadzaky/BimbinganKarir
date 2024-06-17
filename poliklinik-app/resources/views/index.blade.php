<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Index</title>
    <style>
      body {
        background-image: url('{{ asset('images/rumah_sakit.jpg') }}'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 100vh; 
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0; 
      }
      .card {
        background: rgba(255, 255, 255, 0.8) !important; 
        border: none; 
      }
      .btn-primary {
        background-color: #007bff;
        border: none;
        box-shadow: none; 
      }
      .btn-primary:hover {
        background-color: #0056b3; 
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Login Untuk Admin</h5>
              <a href="/login" class="btn btn-primary mt-3">Login admin</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Login Untuk Dokter</h5>
              <a href="/logindokter" class="btn btn-primary mt-3">Login dokter</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title">Login Untuk Pasien</h5>
              <a href="/loginpasien" class="btn btn-primary mt-3">Login pasien</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFY6lrJpItmP6yYG2O4yNfEXiSmJ6RA9r/TLMfQDVo8z4G5IIo1Pq1rR05" crossorigin="anonymous"></script>
  </body>
</html>
