@isset($mhs)
    @dd($mhs)
@endisset
<x-sidebar>
  <link rel="stylesheet" href="css/modal.css">
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-between align-items-stretch">
      <!-- Card Pendaftar -->
      {{-- <a href="/dashboard-Data" class="text-decoration-none h-100 col d-flex"> --}}
      <div class="col">
        <div class="bg-sidebar p-4 rounded shadow h-100">
          <div class="d-flex">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
              </svg>
            </div>
            {{-- <a href="/dashboard-Data" class="col text-center text-decoration-none"> --}}
              <div class="col text-center">
                <p class="jumlah fw-bold">{{ $countpendaftar }}</p>
                <p class="second-text text-white fw-bold">Pendaftar</p>
              </div>
            {{-- </a> --}}
          </div>
        </div>
      </div>
      {{-- </a> --}}

      <!-- Card Cancel Request -->
      <div class="col">
        <div class="bg-sidebar p-4 rounded shadow h-100">
          <div class="d-flex">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
              </svg>
            </div>
            <div class="col text-center">
              <p class="jumlah fw-bold">{{ $countrejected }}</p>
              <p class="second-text text-white fw-bold">Cancel Request</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card Berita -->
      <div class="col">
        <div class="bg-sidebar p-4 rounded shadow h-100">
          <div class="d-flex">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
              </svg>
            </div>
            <div class="col text-center">
              <p class="jumlah fw-bold">3</p>
              <p class="second-text text-white fw-bold">Berita</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @can('lihat-surat-masuk')
    <!-- Tabel Data -->
    <div class="container mt-3">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <h2 class="page-title mb-0">Data Surat Masuk</h2>
        <div class="search-wrapper">
          <svg class="search-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.9584 43.75C34.889 43.75 43.7501 34.889 43.7501 23.9583C43.7501 13.0277 34.889 4.16667 23.9584 4.16667C13.0278 4.16667 4.16675 13.0277 4.16675 23.9583C4.16675 34.889 13.0278 43.75 23.9584 43.75Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M45.8334 45.8333L41.6667 41.6667" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <input type="text" class="search-input" placeholder="Search...">
        </div>
      </div>

      {{-- Modal 1--}}
      <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <img src="" id="pasfoto" style="width: 150px" alt="">
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Identitas Peserta</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Nama Lengkap</strong>
                </div>
                <div id="nama" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>NIK</strong>
                </div>
                <div id="nik" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>NPWP</strong>
                </div>
                <div id="npwp" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>NISN</strong>
                </div>
                <div id="NISN" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Jenis Kelamin</strong>
                </div>
                <div id="pilihanjk" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tempat Lahir</strong>
                </div>
                <div id="Tempatlahir" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tanggal Lahir</strong>
                </div>
                <div id="Tanggallahir" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Berat/Tinggi Badan</strong>
                </div>
                <div id="berat-tinggibadan" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Agama</strong>
                </div>
                <div id="Pilihanagama" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Status Pernikahan</strong>
                </div>
                <div id="Pilihanpernikahan" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#detailModal2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 2--}}
      <div class="modal fade" id="detailModal2" tabindex="-1" aria-labelledby="detailModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel2">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Alamat Lengkap</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tinggal Bersama</strong>
                </div>
                <div id="tinggalbersama" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Alamat</strong>
                </div>
                <div id="Alamat" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kode Pos</strong>
                </div>
                <div id="Kodepos" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>RT/RW</strong>
                </div>
                <div id="RT-RW" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Desa/Kelurahan</strong>
                </div>
                <div id="d-kelurahan" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kecamatan</strong>
                </div>
                <div id="Kecamatan" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kabupaten</strong>
                </div>
                <div id="Kabupaten" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Provinsi</strong>
                </div>
                <div id="Provinsi" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Negara</strong>
                </div>
                <div id="Negara" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Handphone/Telp.Rumah</strong>
                </div>
                <div id="notelp-hp" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Email</strong>
                </div>
                <div id="Email" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
              <button class="btn btn-primary" data-bs-target="#detailModal3" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>
      

      {{-- Modal 3--}}
      <div class="modal fade" id="detailModal3" tabindex="-1" aria-labelledby="detailModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel3">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Detail Pekerjaan</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Nama Perusahaan</strong>
                </div>
                <div id="Namaperu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Alamat Perusahaan</strong>
                </div>
                <div id="Alamatperu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>No Telepon Perusahaan</strong>
                </div>
                <div id="Telp-perusahaan" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Jabatan Saat Ini</strong>
                </div>
                <div id="Jabatan" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal2" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
              <button class="btn btn-primary" data-bs-target="#detailModal4" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 4--}}
      <div class="modal fade" id="detailModal4" tabindex="-1" aria-labelledby="detailModalLabel4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel4">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Identitas SMA/SMK Sederajat</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Nama Sekolah</strong>
                </div>
                <div id="Namasekolah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Jurusan Program</strong>
                </div>
                <div id="JurusanSekolah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tahun Lulus</strong>
                </div>
                <div id="Tahunlulus" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Alamat Sekolah</strong>
                </div>
                <div id="AlamatSekolah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kabupaten</strong>
                </div>
                <div id="KabupatenKota" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Provinsi</strong>
                </div>
                <div id="ProvinsiSekolah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>negara</strong>
                </div>
                <div id="NegaraSekolah" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal3" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
              <button class="btn btn-primary" data-bs-target="#detailModal5" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 5--}}
      <div class="modal fade" id="detailModal5" tabindex="-1" aria-labelledby="detailModalLabel5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel5">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Identitas Ayah</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Nama</strong>
                </div>
                <div id="NamaAyah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>NIK</strong>
                </div>
                <div id="NIKayah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tempat Lahir</strong>
                </div>
                <div id="Tempatlayah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tanggal Lahir</strong>
                </div>
                <div id="tgllayah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Agama</strong>
                </div>
                <div id="PilihanagamaA" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Pendidikan Terakhir</strong>
                </div>
                <div id="PilihanpendtA" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Pekerjaan</strong>
                </div>
                <div id="PilihanpekerA" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Penghasilan</strong>
                </div>
                <div id="PilihanpenghasilanA" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>No Handphone</strong>
                </div>
                <div id="nohpayah" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Status Kehidupan</strong>
                </div>
                <div id="PilihanstatA" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal4" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
              <button class="btn btn-primary" data-bs-target="#detailModal6" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 6--}}
      <div class="modal fade" id="detailModal6" tabindex="-1" aria-labelledby="detailModalLabel6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel6">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Identitas Ibu</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Nama</strong>
                </div>
                <div id="NamaIbu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>NIK</strong>
                </div>
                <div id="NIKibu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tempat Lahir</strong>
                </div>
                <div id="Tempatlibu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Tanggal Lahir</strong>
                </div>
                <div id="tgllibu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Agama</strong>
                </div>
                <div id="PilihanagamaI" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Pendidikan Terakhir</strong>
                </div>
                <div id="PilihanpendtI" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Pekerjaan</strong>
                </div>
                <div id="PilihanpekerI" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Penghasilan</strong>
                </div>
                <div id="PilihanpenghasilanI" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>No Handphone</strong>
                </div>
                <div id="nohpibu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Status Kehidupan</strong>
                </div>
                <div id="PilihanstatI" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal5" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
              <button class="btn btn-primary" data-bs-target="#detailModal7" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 7--}}
      <div class="modal fade" id="detailModal7" tabindex="-1" aria-labelledby="detailModalLabel7" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel7">Detail Informasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="row mb-3">
                <div class="col-4">
                  <h2>Alamat Orang Tua/Wali</h2>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Alamat Jalan</strong>
                </div>
                <div id="Alamatjalan" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>RT/RW</strong>
                </div>
                <div id="rt-rwortu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kode Pos</strong>
                </div>
                <div id="Kodepos-ortu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Desa/Kelurahan</strong>
                </div>
                <div id="d-kelurahanortu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kecamatan/</strong>
                </div>
                <div id="Kecamatan-ortu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Kabupaten/Kota</strong>
                </div>
                <div id="kabupatenortu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>Provinsi</strong>
                </div>
                <div id="Provinsiortu" class="col-8"></div>
              </div>

              <div class="row mb-3">
                <div class="col-4">
                  <strong>No HP/Telp. Rumah</strong>
                </div>
                <div id="nohportu" class="col-8"></div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal6" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
              <button class="btn btn-primary" data-bs-target="#detailModal8" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal 8 --}}
      <div class="modal fade" id="detailModal8" tabindex="-1" aria-labelledby="detailModalLabel8" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="detailModalLabel8">Dokumen PDF</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-3">
                <div class="col-4">
                  <label for="pdfSelector" class="form-label"><strong>Pilih Dokumen</strong></label>
                </div>
                <div class="col-8">
                  <select class="form-select" id="fileSelector" onchange="downloadFile()">
                    <option value="" selected disabled>Pilih Dokumen</option>
                    <option value="doc1.pdf">Fotocopy Legalisir Ijazah SMA / Surat Keterangan Lulus</option>
                    <option value="fotoProfil.jpg">Fotocopy Legalisir SKHU / Nilai UN</option>
                    <option value="dokumen3.pdf">Fotocopy KK (Kartu Keluarga)</option>
                    <option value="dokumen3.pdf">Fotocopy KTP (Kartu Tanda Penduduk)</option>
                    <option value="dokumen3.pdf">Pas Foto Warna latar merah (3x4)</option>
                    <option value="dokumen3.pdf">Bukti Pembayaran Pendaftaran</option>
                    <option value="dokumen3.pdf">Surat Keterangan Kesehatan</option>
                    <option value="dokumen3.pdf">Surat Keterangan Bebas Narkoba</option>
                </select>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <iframe id="pdfViewer" src="" width="100%" height="500px" style="border: none; display: none;"></iframe>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#detailModal7" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
            </div>
          </div>
        </div>
      </div>


      {{-- Tabel --}}
      <table class="table table-bordered border-dark text-center">
        <thead class="table-head">
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>NO TELEPON</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          @if ($mahasiswa->isEmpty())
            <tr>
              <td colspan="5">No data yet</td>
            </tr>
          @endif
          @foreach ($mahasiswa as $mhs)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $mhs->Namalengkap }}</td>
              <td>{{ $mhs->Email }}</td>
              <td>{{ $mhs['notelp-hp'] }}</td>
              <td>
                <a href="javascript:void(0)" id="show-mhs" data-url="{{ route('dashboard.show', $mhs->id) }}" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                  </svg>
                </a>
                {{-- <a href="/dashboard/{{ $mhs->id }}">test</a> --}}
                {{-- <button class="btn btn-detail btn-outline-info btn-sm" data-id="{{ $mhs->id }}" data-bs-toggle="modal" data-bs-target="#detailModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                  </svg>
                </button> --}}
                @can('accept-surat-masuk')
                  <a class="btn btn-outline-success btn-sm" href="{{ route('dashboard.accept', $mhs->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                    </svg>
                  </a>
                @endcan
                @can('reject-surat-masuk')
                  <a class="btn btn-outline-danger btn-sm" href="{{ route('dashboard.reject', $mhs->id) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                  </a>
                @endcan
              </td>
            </tr>
          @endforeach
          <!-- Tambahkan baris lainnya sesuai kebutuhan -->
        </tbody>
      </table>
    </div>
    @endcan
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>

<div id="pdf-container"></div>

<script>
  function downloadFile() {
      var selectedFile = document.getElementById("fileSelector").value;
      if (selectedFile) {
          window.location.href = "/download/" + selectedFile;
      }
  }
  </script>
  <script>
    $(document).ready(function () {
/* When click show user */
      $('body').on('click', '#show-mhs', function () {
          var userURL = $(this).data('url');
          var FullURL = 'storage/pas-foto/' + userURL;
          $.get(userURL, function (data) {
              $('#detailModal').modal('show');
              $('#pasfoto').attr('src', 'storage/' + data['PasFoto']);
              $('#nama').text(': ' + data['Namalengkap']);
              $('#nik').text(': ' + data['NIK']);
              $('#npwp').text(': ' + data['NPWP']);
              $('#NISN').text(': ' + data['NISN']);
              $('#pilihanjk').text(': ' + data['pilihanjk']);
              $('#Tempatlahir').text(': ' + data['Tempatlahir']);
              $('#Tanggallahir').text(': ' + data['Tanggallahir']);
              $('#berat-tinggibadan').text(': ' + data['berat-tinggibadan']);
              $('#Pilihanagama').text(': ' + data['Pilihanagama']);
              $('#Pilihanpernikahan').text(': ' + data['Pilihanpernikahan']);
              $('#tinggalbersama').text(': ' + data['tinggalbersama']);
              $('#Alamat').text(': ' + data['Alamat']);
              $('#Kodepos').text(': ' + data['Kodepos']);
              $('#RT-RW').text(': ' + data['RT-RW']);
              $('#d-kelurahan').text(': ' + data['d-kelurahan']);
              $('#Kecamatan').text(': ' + data['Kecamatan']);
              $('#Kabupaten').text(': ' + data['Kabupaten']);
              $('#Provinsi').text(': ' + data['Provinsi']);
              $('#Negara').text(': ' + data['Negara']);
              $('#notelp-hp').text(': ' + data['notelp-hp']);
              $('#Email').text(': ' + data['Email']);
              $('#Namaperu').text(': ' + data['Namaperu']);
              $('#Alamatperu').text(': ' + data['Alamatperu']);
              $('#Telp-perusahaan').text(': ' + data['Telp-perusahaan']);
              $('#Jabatan').text(': ' + data['Jabatan']);
              $('#Namasekolah').text(': ' + data['Namasekolah']);
              $('#JurusanSekolah').text(': ' + data['JurusanSekolah']);
              $('#Tahunlulus').text(': ' + data['Tahunlulus']);
              $('#AlamatSekolah').text(': ' + data['AlamatSekolah']);
              $('#KabupatenKota').text(': ' + data['KabupatenKota']);
              $('#ProvinsiSekolah').text(': ' + data['ProvinsiSekolah']);
              $('#NegaraSekolah').text(': ' + data['NegaraSekolah']);
              $('#NamaAyah').text(': ' + data['NamaAyah']);
              $('#NIKayah').text(': ' + data['NIKayah']);
              $('#Tempatlayah').text(': ' + data['Tempatlayah']);
              $('#tgllayah').text(': ' + data['tgllayah']);
              $('#PilihanagamaA').text(': ' + data['PilihanagamaA']);
              $('#PilihanpendtA').text(': ' + data['PilihanpendtA']);
              $('#PilihanpekerA').text(': ' + data['PilihanpekerA']);
              $('#PilihanpenghasilanA').text(': ' + data['PilihanpenghasilanA']);
              $('#nohpayah').text(': ' + data['nohpayah']);
              $('#PilihanstatA').text(': ' + data['PilihanstatA']);
              $('#NamaIbu').text(': ' + data['NamaIbu']);
              $('#NIKibu').text(': ' + data['NIKibu']);
              $('#Tempatlibu').text(': ' + data['Tempatlibu']);
              $('#tgllibu').text(': ' + data['tgllibu']);
              $('#PilihanagamaI').text(': ' + data['PilihanagamaI']);
              $('#PilihanpendtI').text(': ' + data['PilihanpendtI']);
              $('#PilihanpekerI').text(': ' + data['PilihanpekerI']);
              $('#PilihanpenghasilanI').text(': ' + data['PilihanpenghasilanI']);
              $('#nohpibu').text(': ' + data['nohpibu']);
              $('#PilihanstatI').text(': ' + data['PilihanstatI']);
              $('#NamaWali').text(': ' + data['NamaWali']);
              $('#NIKWali').text(': ' + data['NIKWali']);
              $('#Tempatlwali').text(': ' + data['Tempatlwali']);
              $('#PilihanagamaW').text(': ' + data['PilihanagamaW']);
              $('#PilihanpendtW').text(': ' + data['PilihanpendtW']);
              $('#PilihanpekerW').text(': ' + data['PilihanpekerW']);
              $('#PilihanpenghasilanW').text(': ' + data['PilihanpenghasilanW']);
              $('#nohpwali').text(': ' + data['nohpwali']);
              $('#tgllwali').text(': ' + data['tgllwali']);
              $('#Alamatjalan').text(': ' + data['Alamatjalan']);
              $('#rt-rwortu').text(': ' + data['rt-rwortu']);
              $('#Kodepos-ortu').text(': ' + data['Kodepos-ortu']);
              $('#d-kelurahanortu').text(': ' + data['d-kelurahanortu']);
              $('#Kecamatan-ortu').text(': ' + data['Kecamatan-ortu']);
              $('#kabupatenortu').text(': ' + data['kabupatenortu']);
              $('#Provinsiortu').text(': ' + data['Provinsiortu']);
              $('#nohportu').text(': ' + data['nohportu']);
          })
      });
    });
  </script>

</x-sidebar>