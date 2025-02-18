<x-layout2>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-fluid " style="margin-top: 120px; margin-bottom: 80px; ">
        <div class="row">
            <div class="col-md-8 offset-md-2" style="margin:0 auto">
                <div class="card text-white" style="background-color: #740001">
                    <div class="card-header">
                        <h1 class="text-center" style="color: #FEC538">BERITA STMIK</h1>
                    </div>
                    <div class="card-body">
                        <div style="width: 70%; background: linear-gradient(to right, #FEC538 20%, transparent 100%);">
                            <h2 class="p-2">PENERIMAAN MAHASISWA BARU STMIK</h2>
                        </div>
                        <img src="{{ asset('img/contoh_berita.png') }}" class="img-fluid mb-3" alt="Penerimaan Mahasiswa Baru STMIK">
                        <p>STMIK (Sekolah Tinggi Manajemen Informatika dan Komputer) dengan bangga mengumumkan pembukaan penerimaan mahasiswa baru untuk tahun akademik 2025/2026.</p>
                        <p>Sebagai salah satu perguruan tinggi terkemuka di bidang teknologi informasi, STMIK menawarkan berbagai program studi unggul, termasuk Teknik Informatika, Sistem Informasi, dan Manajemen Informatika. Kurikulum dirancang untuk mempersiapkan lulusan yang kompeten di dunia kerja, dengan dukungan fasilitas modern dan dosen profesional.</p>
                        <p>Pendaftaran terbuka untuk siswa SMA/SMK sederajat yang memiliki minat tinggi dalam teknologi dan inovasi. Selain itu, STMIK menyediakan berbagai jalur masuk, termasuk jalur prestasi akademik dan beasiswa bagi siswa berprestasi.</p>
                        <p>Jangan lewatkan kesempatan untuk bergabung dengan komunitas yang inovatif dan kreatif di STMIK. Pendaftaran gelombang pertama dibuka mulai Maret hingga Juni 2025.</p>
                        <div class="text-right">
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout2>