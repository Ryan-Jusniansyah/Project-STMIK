<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Main Content -->
    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h2 class="text-maroon fw-bold mb-3 judul">Data Users</h2>
            <div class="search-wrapper">
                <svg class="search-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9584 43.75C34.889 43.75 43.7501 34.889 43.7501 23.9583C43.7501 13.0277 34.889 4.16667 23.9584 4.16667C13.0278 4.16667 4.16675 13.0277 4.16675 23.9583C4.16675 34.889 13.0278 43.75 23.9584 43.75Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M45.8334 45.8333L41.6667 41.6667" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="text" class="search-input" placeholder="Search...">
            </div>
        </div>
        <!-- Tombol Add -->
        <div class="col-md-15 mb-2 d-flex justify-content-md-end">
            {{-- <button class="btn btnadd me-2" data-bs-toggle="modal" data-bs-target="#addAdminModal">Add New</button> --}}
            <a class="btn btnadd me-2" href="{{ route('users.create') }}">Add New</a>
            <a class="btn btn-warning text-white me-0" href="{{ route('roles.index') }}">Add Roles</a>
        </div>

        <!-- Modal -->
    <div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users->isEmpty())
                        <tr>
                            <td colspan="5">No data yet</td>
                        </tr>
                    @endif
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $role)
                                    <label class="badge bg-success">{{ $role }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <div class="action-buttons-container">
                                <a class="btn btn-outline-warning btn-sm" title="edit" href="{{ route('users.edit', $user->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                  </a>
                                {{-- <form action="{{ route('mahasiswa.download', ['id' => $pendaftaran->id]) }}"> --}}
                                <form id="deleteForm-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirmDelete(event, {{ $user->id }})">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" title="hapus">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                        </svg>
                                      </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
    <script>
        function confirmDelete(event, id) {
            event.preventDefault();
            Swal.fire({
                text: "Apakah Anda yakin untuk menghapus user ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${id}`).submit();
                }
            });
        }
    </script>
</x-sidebar>