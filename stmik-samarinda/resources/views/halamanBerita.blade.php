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
                            <h2 class="p-2">{{ $berita['title'] }}</h2>
                        </div>
                        <img src="{{ asset('storage/images/'.$berita->foto) }}" class="img-fluid mb-3" alt="{{ $berita  ->title }}">
                        <p>{{ $berita->description }}</p>
                        <!-- <div class="text-right">
                            <a href="#" class="btn btn-primary">Daftar Sekarang</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout2>