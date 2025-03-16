<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-3 ms-3 me-3">
        <h2 class="fw-bold mb-3" style="color: #740001;">Edit Role</h2>
        <form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <strong>Name</strong>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ $role->name }}">
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <strong>Permission</strong>
                    <br/>
                    @foreach($permissions as $value)
                        <label><input type="checkbox" name="permission[{{$value->id}}]" value="{{$value->id}}" class="name" {{ in_array($value->id, $rolePermissions) ? 'checked' : ''}}>
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