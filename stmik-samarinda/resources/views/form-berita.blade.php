<x-sidebar>
    <div class="container mt-3 ms-3 me-3">
        <h2 class="fw-bold mb-3" style="color: #740001;">Berita Acara</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="mb-3 d-flex">
                <input type="file" name="foto" class="form-control me-2">
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
        </form>
    </div>
</x-sidebar>