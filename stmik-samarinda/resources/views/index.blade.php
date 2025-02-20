<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid">
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
    
          <div class="container py-5 text-center">
            <!-- Logo -->
            <div class="logo justify-content-center" >
              <img id="profil" src="img/logo.png" alt="STMIK Samarinda Logo" width="40%">
            </div>
        
            <!-- Title -->
            <p class="fw-bold">SELAMAT DATANG DI</p>
            <div class="title fs-2 fw-bolder">STMIK SAMARINDA</div>
            <div class="divider"></div>
        
            <!-- Buttons -->
            <div class="d-flex justify-content-center ms-auto mb-4 mt-4">
              <a href="Dosen_STMIK" class="btn btn-primary border-0 text-color me-2">Dosen</a>
              <a href="visimisi" class="btn btn-primary border-0 text-color">Visi & Misi</a>
            </div>
        
            <!-- Description -->
            <p>
              Kami adalah lembaga pendidikan yang berkomitmen untuk menyediakan pendidikan berkualitas tinggi di bidang teknologi informasi dan komputer.
              Dengan tenaga pengajar yang berpengalaman dan kurikulum yang terkini, kami bertujuan untuk melahirkan profesional IT yang siap bersaing di era digital.
              Jelajahi layanan kami, termasuk program studi unggulan, fasilitas modern, dan berbagai kegiatan akademik serta non-akademik yang memperkaya pengalaman belajar Anda.
              Bergabunglah dengan kami dan raih karier gemilang di dunia teknologi!
            </p>
          </div>
    </div>

    <div class="container my-5">
      <h2 class="title fw-bold ms auto mb-5" id="Akademik">Akademik dan Fasilitas</h2>
        <div class="row g-4">
            <!-- Akademik Section -->
            <div class="col-md-6">
                <div class="academic-section shadow">
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
            <div class="col-md-6 ">
                <div class="facilities-section shadow">
                    <h3 class="section-title">Fasilitas</h3>
                    <h3 class="section-title mb-3">STMIK Samarinda</h3>
                    <div class="fasilitas facility-item my-5">
                        <i class="bi bi-door-closed-fill"></i>
                        <span>Ruang Belajar Full AC</span>
                    </div>
                    <div class="fasilitas facility-item my-5">
                        <i class="bi bi-building"></i>
                        <span>Ruang Mushola</span>
                    </div>
                    <div class="fasilitas facility-item my-5">
                        <i class="bi bi-wifi"></i>
                        <span>Free Wifi</span>
                    </div>
                    <div class="fasilitas facility-item my-5">
                        <i class="bi bi-laptop"></i>
                        <span>Lab Komputer</span>
                    </div>
                    <div class="fasilitas facility-item my-5">
                        <i class="bi bi-book"></i>
                        <span>Perpustakaan</span>
                    </div>
                    <div class="fasilitas facility-item my-5">
                        <i class="bi bi-car-front-fill"></i>
                        <span>Lapangan/Parkir</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
      <h2 class="title fw-bold ms-auto mb-0" id="Biaya">Biaya Pendaftaran</h2>
    </div>
    <div class="biayaPendaftaran container my-5 shadow" style="border-radius: 10px;">
        <div class="mt-4">
            <!-- Informasi Pembayaran -->
            <div class="info-header">Informasi Pembayaran</div>
            <p class="text-center mt-4">
                Biaya Perkuliahan Bagi siswa yang kurang mampu mendapatkan Beasiswa/subsidi:
            </p>
            <div class="price-box mb-2">Rp. 2.500.000</div>
            <p class="text-center mt-4 mb-0">
                Biaya Perkuliahan Reguler tanpa beasiswa/subsidi:
            </p>
            <div class="class-box">Pembayaran Kelas Pagi</div>
            <div class="price-box">Rp. 4.000.000</div>
            <div class="class-box">Pembayaran Kelas Malam</div>
            <div class="price-box">Rp. 4.000.000</div>
        </div>
    </div>

    <div class="container my-5">
      <h2 class="title fw-bold ms auto mb-4" id="Berita">Berita STMIK</h2>
        <div class="row g-4">
            @foreach ($berita as $item)
            <!-- berita section 1 -->
            <div class="col-md-4">
              <div class="berita shadow">
                @if($item->foto)
                <img src="{{ asset('storage/images/'.$item->foto) }}" 
     alt="{{ $item->title }}" 
     class="img-fluid my-3 rounded" 
     style="width: 100%; height: 300px; object-fit: cover;">
                @endif
                  <a href="{{ url('/berita/'.$item->id) }}" style="text-decoration:none;"><h3 class="section-title" style="color: #740001;">{{ $item->title }}</h3>
                  <h6 style="color: #f39c12;">{{ $item->created_at->format('d M Y') }}</h6>
                    <p class="text-justify" style="color: black;">
                        {{ Str::limit($item->description, 100) }}
                    </p>
                  </a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>