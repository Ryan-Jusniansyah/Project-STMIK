<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Akademik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fakultas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Biaya Pendaftaran</a>
              </li>
            </ul>
        </div>
        <form class="d-flex">
            <button class="btn btn-outline-success" type="submit" style="color: #FEC538">Daftar Sekarang!</button>
          </form>
        </div>
      </nav>

      {{ $slot }}
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>