<x-sidebar>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-between align-items-stretch">
      <!-- Card Pendaftar -->
      <div class="col">
        <div class="bg-sidebar p-4 rounded shadow h-100">
          <div class="d-flex">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
              </svg>
            </div>
            <div class="col text-center">
              <p class="jumlah fw-bold">150</p>
              <p class="second-text text-white fw-bold">Pendaftar</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card Cancel Request -->
      <div class="col">
        <div class="bg-sidebar p-4 rounded shadow h-100">
          <div class="d-flex">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
              </svg>
            </div>
            <div class="col text-center">
              <p class="jumlah fw-bold">50</p>
              <p class="second-text text-white fw-bold">Cancel Request</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card Berita -->
      <div class="col">
        <div class="bg-sidebar p-4 rounded shadow h-100">
          <div class="d-flex">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
              </svg>
            </div>
            <div class="col text-center">
              <p class="jumlah fw-bold">3</p>
              <p class="second-text text-white fw-bold">Berita</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Tabel Data -->
    <div class="container mt-3">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <h2 class="page-title mb-0">Data Surat Masuk</h2>
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
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-sidebar>