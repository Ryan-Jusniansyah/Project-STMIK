<x-sidebar>
    <link rel="stylesheet" href="{{ asset('css/dashboard_berita.css') }}">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-3">
        <div class="mb-4">
            <h2 class="text-maroon fw-bold mb-3 judul">Berita Acara</h2>
            <div class="row align-items-center g-3">
                <div class="col-md-6">
                    <form action="{{ route('berita.search') }}" method="GET" class="d-flex gap-2">
                        <input type="search" name="search" class="form-control" placeholder="Search" value="{{ request('search') }}">
                        <button class="btn btn-custom-search" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <a class="btn btnadd" href="/form-berita">Add New</a>
                </div>
                @if (session('Success'))
                    <div id="pesan" class="alert alert-success">
                        {{ session('Success') }}
                    </div>
                @endif
            </div>
        </div>

        {{-- CARD BERITA --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- CARD 1 -->
            @foreach($berita as $news)
            <div class="col">
                <div class="card h-100 shadow-sm" style="width: 18rem; min-height: 400px;">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3">
                            <div class="news-icon text-danger w-100" style="height: 200px;">
                                <img src="{{ asset('storage/images/' . $news->foto) }}" alt="" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                        </div>
                        <h5 class="card-title text-start">{{ $news->title }}</h5>
                        <p class="card-text text-align-start text-muted small flex-grow-1">{{ $news->description }}</p>
                        <div class="gariscard"></div>
                        <p class="card-text text-start text-muted small">{{ $news->created_at->format('d M Y') }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-end gap-2">
                        <a class="btn btn-warning btn-sm" href="{{ url('/form-edit/'.$news->id.'/edit') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </a>
                        <form action="{{ url('/form-berita/'.$news->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-sidebar>