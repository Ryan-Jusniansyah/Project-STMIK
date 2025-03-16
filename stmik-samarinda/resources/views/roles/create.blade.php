<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-3 ms-3 me-3">
        <h2 class="fw-bold mb-3" style="color: #740001;">Add Role</h2>
        <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <strong>Name</strong>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Permission</strong>
                    <br/>
                    @foreach($permissions as $value)
                        <label><input type="checkbox" name="permission[{{$value->id}}]" value="{{$value->id}}" class="name">
                        {{ $value->name }}</label>
                    <br/>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a class="btn btn-danger" href="{{ route('roles.index') }}">Cancel</a>
        </form>
    </div>
</x-sidebar>