<x-sidebar>
    <x-slot:title>Edit Berita</x-slot:title>
    <div class="container mt-3 ms-3 me-3">
        <h2 class="fw-bold mb-3" style="color: #740001;">Berita Acara</h2>
        <form action="{{ url('/form-edit/'.$berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $berita->title }}">
            </div>
            <div class="mb-3 d-flex">
                <input type="file" name="foto" class="form-control me-2">
                @if($berita->foto)
                    <p class="mt-2">File saat ini: <strong>{{ $berita->foto }}</strong></p>
                @endif
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="5" name="description" placeholder="Description">{{ $berita->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-danger"><a href="/dashboard-berita" style="text-decoration: none; color: white;">Cancel</a></button>
        </form>
    </div>
</x-sidebar>