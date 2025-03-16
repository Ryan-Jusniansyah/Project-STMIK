<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mt-3 ms-3 me-3">
        <h2 class="fw-bold mb-3" style="color: #740001;">Add User</h2>
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="role" class="select-label">Role</label>
                    <select class="form-select mt-2 @error('role') is-invalid @enderror" aria-label="role" name="roles[]" id="role">
                        <option selected disabled>Pilih Role</option>
                        @foreach ($roles as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
            </div>
            
            <button type="submit" class="btn btn-success">Save</button>
            <a class="btn btn-danger" href="{{ route('users.index') }}">Cancel</a>
        </form>
    </div>
</x-sidebar>