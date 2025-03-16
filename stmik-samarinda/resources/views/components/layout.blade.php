<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top shadow">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">
                <img src="img/logo.png" alt="STMIK Samarinda Logo" class="img-fluid" style="max-width: 60px;">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item fw-500 text-color">
                <a class="nav-link" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#profil">Profil</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#Akademik">Akademik</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#Biaya">Biaya Pendaftaran</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#Berita">Berita</a>
              </li>
            </ul>
          </div>
          <div class="d-flex">
            <a href="pendaftaran1" class="btn btn-primary border-0 text-color fw-bold">Daftar Sekarang!</a>
          </div>
        </div>
      </nav>

      {{ $slot }}
      
      <footer class="footer text-white py-5">
        <div class="container">
          <div class="row">
            <!-- Logo -->
            <div class="col-md-4 mb-4 mb-md-0 text-center">
                <img src="{{ asset('img/logo.png') }}" alt="STMIK Samarinda Logo" class="img-fluid" width="100%"">
            </div>
            
            <!-- Social Media Links -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
              <p>Social Media</p>
              <div class="mb-3">
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-google"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-rss"></i></a>
              </div>

              <div>
                  <p class="mb-1">Jl. Banggeris No.75, RT.03, Kota Samarinda</p>
                  <p>
                    <i class="bi bi-telephone"></i> (123) 456-7890<br>
                    <i class="bi bi-printer"></i> (123) 456-7890
                  </p>
              </div>
            </div>
      
            <!-- Map -->
            <div class="col-md-4 text-center">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6702190504707!2d117.12024280804113!3d-0.4936757994993988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67efcd0285307%3A0x74adc841c3c9adcc!2sSTMIK%20SAMARINDA!5e0!3m2!1sid!2sid!4v1737548439429!5m2!1sid!2sid" 
                class="w-100"
                style="border:0; height: 200px; max-width: 300px; margin: 0 auto;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
            </div>
          </div>
      
          <hr class="bg-white">
      
          <div class="row text-center">
            <div class="col">
              <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#" class="text-white">Beranda</a>
                <a href="#" class="text-white">Profile</a>
                <a href="#" class="text-white">Akademik</a>
                <a href="#" class="text-white">Fakultas</a>
                <a href="#" class="text-white">Biaya Pendaftaran</a>
              </div>
            </div>
          </div>
      
          <div class="row text-center mt-3">
            <div class="col">
              <p class="mb-0">&copy; 2025 STMIK Samarinda. All rights reserved.</p>
            </div>
          </div>
        </div>
      </footer>
      
      <!-- Bootstrap Icons -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session()->has('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
    @endif
  </body>
</html>