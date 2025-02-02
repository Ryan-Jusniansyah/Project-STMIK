<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- <title>@yield('title')</title> --}}
    {{-- <x-title>{{ $title }}</x-title> --}}
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top shadow">
        <div class="container-fluid">
            <img src="img/logo.png" alt="STMIK Samarinda Logo" width="6%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-auto justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item fw-500 text-color">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#">Profil</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#">Akademik</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#">Fakultas</a>
              </li>
              <li class="nav-item text-color">
                <a class="nav-link" href="#">Biaya Pendaftaran</a>
              </li>
            </ul>
        </div>
        <form class="d-flex">
            <button class="btn btn-primary border-0 text-color fw-bold" type="submit">Daftar Sekarang!</button>
          </form>
        </div>
      </nav>

      {{ $slot }}
      <footer class="footer text-white py-5">
        <div class="container">
          <div class="row">
            <!-- Logo and Address -->
            <div class="col-md-4 text-center text-md-end">
                <img src="img/logo.png" alt="STMIK Samarinda Logo" width="100%">

            </div>
            
            <!-- Social Media Links -->
            <div class="col-md-4 text-center mb-3 mt-3">
              <p>Social Media</p>
              <div>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-google"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-rss"></i></a>
              </div>

              <div class="mt-3">
                  <p>Jl. Banggeris No.75, RT.03, Kota Samarinda</p>
                  <p>
                    <i class="bi bi-telephone"></i> (123) 456-7890<br>
                    <i class="bi bi-printer"></i> (123) 456-7890
                  </p>
              </div>
            </div>
      
            <!-- Map -->
            <div class="col-md-4 text-center text-md-end">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6702190504707!2d117.12024280804113!3d-0.4936757994993988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67efcd0285307%3A0x74adc841c3c9adcc!2sSTMIK%20SAMARINDA!5e0!3m2!1sid!2sid!4v1737548439429!5m2!1sid!2sid" 
                width="250" 
                height="200" 
                style="border:10px;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
            </div>
          </div>
      
          <hr class="bg-white">
      
          <div class="row text-center">
            <div class="col">
              <a href="#" class="text-white me-3">Beranda</a>
              <a href="#" class="text-white me-3">Profile</a>
              <a href="#" class="text-white me-3">Akademik</a>
              <a href="#" class="text-white me-3">Fakultas</a>
              <a href="#" class="text-white me-3">Biaya Pendaftaran</a>
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
  </body>
</html>