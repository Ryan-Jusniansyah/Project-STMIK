<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Main Content -->
    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h2 class="text-maroon fw-bold mb-3 judul">Data Pendaftar</h2>
            <div class="search-wrapper">
                <svg class="search-icon" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9584 43.75C34.889 43.75 43.7501 34.889 43.7501 23.9583C43.7501 13.0277 34.889 4.16667 23.9584 4.16667C13.0278 4.16667 4.16675 13.0277 4.16675 23.9583C4.16675 34.889 13.0278 43.75 23.9584 43.75Z" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M45.8334 45.8333L41.6667 41.6667" stroke="#171717" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="text" class="search-input" placeholder="Search...">
            </div>
        </div>

        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>NO TELEPON</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($mahasiswa->isEmpty())
                        <tr>
                            <td colspan="5">No data yet</td>
                        </tr>
                    @endif
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mhs->Namalengkap }}</td>
                        <td>{{ $mhs->Email }}</td>
                        <td>{{ $mhs['notelp-hp'] }}</td>
                        <td>
                            <div class="action-buttons-container">
                                <button class="action-button" title="View">
                                    <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#09A0D5" />
                                        <path d="M18.5799 15C18.5799 16.98 16.9799 18.58 14.9999 18.58C13.0199 18.58 11.4199 16.98 11.4199 15C11.4199 13.02 13.0199 11.42 14.9999 11.42C16.9799 11.42 18.5799 13.02 18.5799 15Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.0001 23.27C18.5301 23.27 21.8201 21.19 24.1101 17.59C25.0101 16.18 25.0101 13.81 24.1101 12.4C21.8201 8.8 18.5301 6.72 15.0001 6.72C11.4701 6.72 8.18009 8.8 5.89009 12.4C4.99009 13.81 4.99009 16.18 5.89009 17.59C8.18009 21.19 11.4701 23.27 15.0001 23.27Z" stroke="#09A0D5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button class="action-button" title="Delete">
                                    <svg class="action-icon" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="29" height="29" rx="3.5" fill="white" stroke="#CE0002" />
                                        <path d="M6.5 21V10C6.5 6 7.5 5 11.5 5H18.5C22.5 5 23.5 6 23.5 10V20C23.5 20.14 23.5 20.28 23.49 20.42" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.35 18H23.5V21.5C23.5 23.43 21.93 25 20 25H10C8.07 25 6.5 23.43 6.5 21.5V20.85C6.5 19.28 7.78 18 9.35 18Z" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11 10H19" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M11 13.5H16" stroke="#CE0002" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</x-sidebar>