<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid px-0">
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/pic1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/pic1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/pic1.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
    
          <div class="container py-4 py-md-5 text-center">
            <!-- Logo -->
            <div class="logo d-flex justify-content-center" >
              <img id="profil" src="img/logo.png" alt="STMIK Samarinda Logo" class="img-fluid" style="max-width: 200px; width: 40%;">
            </div>
        
            <!-- Title -->
            <p class="fw-bold mt-3">SELAMAT DATANG DI</p>
            <div class="title fs-2 fw-bolder">STMIK SAMARINDA</div>
            <div class="divider"></div>
        
            <!-- Buttons -->
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 mb-4 mt-4">
              <a href="Dosen_STMIK" class="btn btn-primary border-0 text-color">Dosen</a>
              <a href="visimisi" class="btn btn-primary border-0 text-color">Visi & Misi</a>
            </div>
        
            <!-- Description -->
            <p class="px-2 px-md-4">
              Kami adalah lembaga pendidikan yang berkomitmen untuk menyediakan pendidikan berkualitas tinggi di bidang teknologi informasi dan komputer.
              Dengan tenaga pengajar yang berpengalaman dan kurikulum yang terkini, kami bertujuan untuk melahirkan profesional IT yang siap bersaing di era digital.
              Jelajahi layanan kami, termasuk program studi unggulan, fasilitas modern, dan berbagai kegiatan akademik serta non-akademik yang memperkaya pengalaman belajar Anda.
              Bergabunglah dengan kami dan raih karier gemilang di dunia teknologi!
            </p>
          </div>
    </div>

    <div class="container my-4 my-md-5">
      <h2 class="title fw-bold text-center text-md-start mb-4 mb-md-5" id="Akademik">Akademik dan Fasilitas</h2>
        <div class="row g-4">
            <!-- Akademik Section -->
            <div class="col-12 col-md-6">
                <div class="academic-section shadow h-100">
                  <img src="img/coding.png" alt="Sistem Informasi" class="img-fluid my-3 rounded">
                  <h3 class="section-title">S1 - Sistem Informasi</h3>
                    <p class="text-justify">
                        Sistem Informasi adalah program studi yang memadukan ilmu teknologi informasi
                        dengan manajemen dan bisnis. Jurusan ini dirancang untuk menghasilkan lulusan
                        yang mampu merancang, mengelola, dan mengimplementasikan sistem informasi
                        dalam sebuah organisasi guna mendukung pengambilan keputusan dan meningkatkan efisiensi operasional.
                    </p>
                </div>
            </div>

            <!-- Fasilitas Section -->
            <div class="col-12 col-md-6">
                <div class="facilities-section shadow h-100">
                    <h3 class="section-title">Fasilitas</h3>
                    <h3 class="section-title mb-3">STMIK Samarinda</h3>
                    
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="fasilitas facility-item my-3 my-md-4">
                                <i class="bi bi-door-closed-fill"></i>
                                <span>Ruang Belajar Full AC</span>
                            </div>
                            <div class="fasilitas facility-item my-3 my-md-4">
                                <i class="bi bi-building"></i>
                                <span>Ruang Mushola</span>
                            </div>
                            <div class="fasilitas facility-item my-3 my-md-4">
                                <i class="bi bi-wifi"></i>
                                <span>Free Wifi</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="fasilitas facility-item my-3 my-md-4">
                                <i class="bi bi-laptop"></i>
                                <span>Lab Komputer</span>
                            </div>
                            <div class="fasilitas facility-item my-3 my-md-4">
                                <i class="bi bi-book"></i>
                                <span>Perpustakaan</span>
                            </div>
                            <div class="fasilitas facility-item my-3 my-md-4">
                                <i class="bi bi-car-front-fill"></i>
                                <span>Lapangan/Parkir</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4 my-md-5">
      <h2 class="title fw-bold text-center text-md-start mb-3" id="Biaya">Biaya Pendaftaran</h2>
    </div>
    <div class="biayaPendaftaran container my-4 my-md-5 shadow" style="border-radius: 10px;">
        <div class="mt-4 px-2 px-md-4">
            <!-- Informasi Pembayaran -->
            <div class="info-header d-block mx-auto mx-md-3 mx-lg-auto">Informasi Pembayaran</div>
            <p class="text-center mt-4">
                Biaya Perkuliahan Bagi siswa yang kurang mampu mendapatkan Beasiswa/subsidi:
            </p>
            <div class="price-box mx-auto mb-2">Rp. 2.500.000</div>
            <p class="text-center mt-4 mb-0">
                Biaya Perkuliahan Reguler tanpa beasiswa/subsidi:
            </p>
            <div class="class-box mx-auto">Pembayaran Kelas Pagi</div>
            <div class="price-box mx-auto">Rp. 4.000.000</div>
            <div class="class-box mx-auto">Pembayaran Kelas Malam</div>
            <div class="price-box mx-auto mb-4">Rp. 4.000.000</div>
        </div>
    </div>

    <!-- Bagian Berita -->
    <div class="container my-4 my-md-5">
      <h2 class="title fw-bold text-center text-md-start mb-4" id="Berita">Berita STMIK</h2>
        <div class="row g-4">
            @foreach ($berita as $item)
            <!-- berita section -->
            <div class="col-12 col-md-6 col-lg-4">
              <div class="berita shadow" style="height: 500px; overflow: hidden; display: flex; flex-direction: column;">
                @if($item->foto)
                <div style="height: 250px; overflow: hidden;">
                    <img src="{{ asset('storage/images/'.$item->foto) }}" 
                    alt="{{ $item->title }}" 
                    class="img-fluid rounded" 
                    style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                @endif
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <a href="{{ url('/berita/'.$item->id) }}" style="text-decoration:none;">
                    <h3 class="section-title" style="color: #740001; font-size: 1.2rem; margin-bottom: 5px;">{{ $item->title }}</h3>
                    <h6 style="color: #f39c12;">{{ $item->created_at->format('d M Y') }}</h6>
                    <p class="text-justify" style="color: black; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        {{ Str::limit($item->description, 100) }}
                    </p>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>