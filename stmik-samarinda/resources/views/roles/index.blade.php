<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Main Content -->
    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h2 class="text-maroon fw-bold mb-3 judul">Data Roles</h2>
        </div>
        <!-- Tombol Add -->
        <div class="col-md-15 mb-2 d-flex justify-content-md-end">
            <a class="btn btnadd me-2" href="{{ route('roles.create') }}">Add New</a>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>ROLE</th>
                        <th>HAK AKSES</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($roles->isEmpty())
                        <tr>
                            <td colspan="5">No data yet</td>
                        </tr>
                    @endif
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach ($role->permissions as $permission)
                                <label class="badge bg-success">{{ $permission->name }}</label>
                            @endforeach
                        </td>
                        <td>
                            <div class="action-buttons-container">
                                <a class="btn btn-outline-warning btn-sm" title="edit" href="{{ route('roles.edit', $role->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                  </a>

                                  <form id="deleteForm-{{ $role->id }}" action="{{ route('roles.destroy', $role->id) }}" method="POST" onsubmit="return confirmDelete(event, {{ $role->id }})">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm" title="hapus" type="submit" id="btnhapus">
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
                text: "Apakah Anda yakin untuk menghapus role ini?",
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