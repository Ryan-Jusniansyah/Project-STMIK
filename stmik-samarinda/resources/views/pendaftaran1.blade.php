@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar">
            <form action="" method="POST">
                @csrf
                <div class="programstudi">
                    <h4 class="judul1">Program Studi</h4>
                    <div class="line2"></div>
                    <div class="ps">
                        <div class="row">
                            <div class="col">
                                <label for="Ps" class="form-label">Program Studi *</label>
                                <input type="text" class="form-control @error('Programstudi') is-invalid @enderror" name="Programstudi" id="Ps" placeholder="Sistem Informasi (Sarjana)" value="Sistem Informasi (Sarjana)" readonly>
                            </div>
                            <div class="col">
                                <label for="Pilkelas" class="select-label">Pilihan Kelas *</label>
                                <select class="form-select mt-2 @error('Pilihankelas') is-invalid @enderror" aria-label="Pilihan-Kelas" name="Pilihankelas">
                                    <option selected disabled>Masukkan Pilihan Kelas</option>
                                    <option {{ old('Pilihankelas', $form->data['step1']['Pilihankelas'] ?? '') == 'Pagi (Offline)' ? 'selected' : '' }} value="Pagi (Offline)">Pagi (Offline)</option>
                                    <option {{ old('Pilihankelas', $form->data['step1']['Pilihankelas'] ?? '') == 'Malam (Online)' ? 'selected' : '' }} value="Malam (Online)">Malam (Online)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="idpeserta">
                    <h4 class="judul2">Identitas Peserta</h4>
                    <div class="line3"></div>
                    <div class="idform">
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="Nama" class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control @error('Namalengkap') is-invalid @enderror" name="Namalengkap" id="NamaLengkap" placeholder="Masukkan Nama Lengkap" value="{{ old('Namalengkap', $form->data['step1']['Namalengkap'] ?? '') }}">
                            </div>
                            <div class="col">
                                <label for="NIK" class="form-label">NIK *</label>
                                <input type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK" id="nik" placeholder="Masukkan NIK anda" value="{{ old('NIK', $form->data['step1']['NIK'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="NPWP" class="form-label">NPWP</label>
                                <input type="number" class="form-control @error('NPWP') is-invalid @enderror" name="NPWP" id="npwp" placeholder="Masukkan NPWP anda" value="{{ old('NPWP', $form->data['step1']['NPWP'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="NISN" class="form-label">NISN *</label>
                                <input type="text" class="form-control @error('NISN') is-invalid @enderror" name="NISN" id="nisn" placeholder="Masukkan NISN anda" value="{{ old('NISN', $form->data['step1']['NISN'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="Piljk" class="select-label">Jenis Kelamin *</label>
                                <select class="form-select mt-2 @error('pilihanjk') is-invalid @enderror" aria-label="Pilihan-jk" name='pilihanjk'>
                                    <option value="" disabled selected>Jenis Kelamin</option>
                                    <option {{ old('pilihanjk', $form->data['step1']['pilihanjk'] ?? '') == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">Laki-Laki</option>
                                    <option {{ old('pilihanjk', $form->data['step1']['pilihanjk'] ?? '') == 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="Tl" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control @error('Tempatlahir') is-invalid @enderror" name="Tempatlahir" id="tempatlahir" placeholder="Kota Asal" value="{{ old('Tempatlahir', $form->data['step1']['Tempatlahir'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="tglahir" class="form-label">Tanggal Lahir *</label>
                                <input type="date" max="{{ date('Y-m-d') }}" class="form-control @error('Tanggallahir') is-invalid @enderror" name="Tanggallahir" id="tanggallahir" placeholder="DD/MM/YYYY" value="{{ old('Tanggallahir', $form->data['step1']['Tanggallahir'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="Pilbaju" class="select-label">Ukuran Baju *</label>
                                <select class="form-select mt-2 @error('Ukuranbaju') is-invalid @enderror" aria-label="Ukuran-Baju" name="Ukuranbaju">
                                    <option selected disabled>Pilih ukuran baju anda</option>
                                    <option {{ old('Ukuranbaju', $form->data['step1']['Ukuranbaju'] ?? '') == 'S' ? 'selected' : '' }} value="S">S</option>
                                    <option {{ old('Ukuranbaju', $form->data['step1']['Ukuranbaju'] ?? '') == 'M' ? 'selected' : '' }} value="M">M</option>
                                    <option {{ old('Ukuranbaju', $form->data['step1']['Ukuranbaju'] ?? '') == 'L' ? 'selected' : '' }} value="L">L</option>
                                    <option {{ old('Ukuranbaju', $form->data['step1']['Ukuranbaju'] ?? '') == 'XL' ? 'selected' : '' }} value="XL">XL</option>
                                    <option {{ old('Ukuranbaju', $form->data['step1']['Ukuranbaju'] ?? '') == 'XXL' ? 'selected' : '' }} value="XXL">XXL</option>
                                    <option {{ old('Ukuranbaju', $form->data['step1']['Ukuranbaju'] ?? '') == 'XXXL' ? 'selected' : '' }} value="XXXL">XXXL</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="Pilagama" class="select-label">Agama *</label>
                                <select class="form-select mt-2 @error('Pilihanagama') is-invalid @enderror" aria-label="Pilihan-Agama" name="Pilihanagama">
                                    <option selected disabled>Pilih Agama Anda</option>
                                    <option {{ old('Pilihanagama', $form->data['step1']['Pilihanagama'] ?? '') == 'Islam' ? 'selected' : '' }} value="Islam">Islam</option>
                                    <option {{ old('Pilihanagama', $form->data['step1']['Pilihanagama'] ?? '') == 'Kristen' ? 'selected' : '' }} value="Kristen">Kristen</option>
                                    <option {{ old('Pilihanagama', $form->data['step1']['Pilihanagama'] ?? '') == 'Katolik' ? 'selected' : '' }} value="Katolik">Katolik</option>
                                    <option {{ old('Pilihanagama', $form->data['step1']['Pilihanagama'] ?? '') == 'Hindu' ? 'selected' : '' }} value="Hindu">Hindu</option>
                                    <option {{ old('Pilihanagama', $form->data['step1']['Pilihanagama'] ?? '') == 'Buddha' ? 'selected' : '' }} value="Buddha">Buddha</option>
                                    <option {{ old('Pilihanagama', $form->data['step1']['Pilihanagama'] ?? '') == 'Konghucu' ? 'selected' : '' }} value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="Pilstatpernikahan" class="select-label">Status Pernikahan</label>
                                <select class="form-select mt-2 @error('Pilihanpernikahan') is-invalid @enderror" aria-label="Pilihan-pernikahan" name="Pilihanpernikahan">
                                    <option selected disabled>Status Pernikahan</option>
                                    <option {{ old('Pilihanpernikahan', $form->data['step1']['Pilihanpernikahan'] ?? '') == 'Belum Menikah' ? 'selected' : '' }} value="Belum Menikah">Belum Menikah</option>
                                    <option {{ old('Pilihanpernikahan', $form->data['step1']['Pilihanpernikahan'] ?? '') == 'Sudah Menikah' ? 'selected' : '' }} value="Sudah Menikah">Sudah Menikah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alamat">
                    <h4 class="judul3">Alamat Lengkap Peserta (Sesuai KTP)</h4>
                    <div class="line4"></div>
                    <div class="idalamat">
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="tinggalbersama" class="form-label">Tinggal Bersama *</label>
                                <input type="text" class="form-control @error('tinggalbersama') is-invalid @enderror" name="tinggalbersama" id="tglbersama" placeholder="Contoh: Orang Tua" value="{{ old('tinggalbersama', $form->data['step1']['tinggalbersama'] ?? '') }}">
                            </div>
                            <div class="col">
                                <label for="alamat1" class="form-label">Alamat *</label>
                                <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" id="alamat1" placeholder="Contoh: Jalan Piano" value="{{ old('Alamat', $form->data['step1']['Alamat'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="codepos" class="form-label">Kode Pos *</label>
                                <input type="number" class="form-control @error('Kodepos') is-invalid @enderror" name="Kodepos" id="Kodepos" placeholder="Contoh: 75100" value="{{ old('Kodepos', $form->data['step1']['Kodepos'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="rt-rw" class="form-label">RT/RW *</label>
                                <input type="text" onkeyup="oneSlash(this)" class="form-control @error('RT_RW') is-invalid @enderror" name="RT_RW" id="rt_rw1" placeholder="Contoh: 1/10" value="{{ old('RT-RW', $form->data['step1']['RT-RW'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="desa-k" class="form-label">Desa/Kelurahan *</label>
                                <input type="text" class="form-control @error('d_kelurahan') is-invalid @enderror" name="d_kelurahan" id="d_keluharan" placeholder="Contoh: Kelurahan Air Hitam" value="{{ old('d-kelurahan', $form->data['step1']['d-kelurahan'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="kec" class="form-label">Kecamatan *</label>
                                <input type="text" class="form-control @error('Kecamatan') is-invalid @enderror" name="Kecamatan" id="Kecamatan" placeholder="Contoh: Kecamatan Samarinda Ulu" value="{{ old('Kecamatan', $form->data['step1']['Kecamatan'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="kab" class="form-label">Kabupaten/Kota *</label>
                                <input type="text" class="form-control @error('Kabupaten') is-invalid @enderror" name="Kabupaten" id="Kabupaten" placeholder="Contoh: Kabupaten Kurtai Kartanegara" value="{{ old('Kabupaten', $form->data['step1']['Kabupaten'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="prov" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control @error('Provinsi') is-invalid @enderror" name="Provinsi" id="Provinsi" placeholder="Contoh: Kalimantan Timur" value="{{ old('Provinsi', $form->data['step1']['Provinsi'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="neg" class="form-label">Negara *</label>
                                <input type="text" class="form-control @error('Negara') is-invalid @enderror" name="Negara" id="Negara" placeholder="Contoh: Indonesia" value="{{ old('Negara', $form->data['step1']['Negara'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="notelp" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control @error('notelp_hp') is-invalid @enderror" name="notelp_hp" id="notelp_hp" placeholder="Contoh: 08XXXXXXXXXX" value="{{ old('notelp-hp', $form->data['step1']['notelp-hp'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" placeholder="Contoh: user@gmail.com (aktif)" value="{{ old('Email', $form->data['step1']['Email'] ?? '') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detpekerjaan">
                    <h4 class="judul4">Detail Pekerjaan (Jika Sudah Bekerja)</h4>
                    <div class="line5"></div>
                    <div class="formdetpekerjaan">
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="namaperusahaan" class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control @error('Namaperu') is-invalid @enderror" name="Namaperu" id="Namaperu" placeholder="Contoh: PT.PAMA" value="{{ old('Namaperu', $form->data['step1']['Namaperu'] ?? '') }}">
                            </div>
                            <div class="col">
                                <label for="alamatperusahaan" class="form-label">Alamat Perusahaan</label>
                                <input type="text" class="form-control @error('Alamatperu') is-invalid @enderror" name="Alamatperu" id="Alamatperu" placeholder="Contoh: Jalan Damai" value="{{ old('Alamatperu', $form->data['step1']['Alamatperu'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="telp-perusahaan" class="form-label">No. Telpon Perusahaan</label>
                                <input type="number" class="form-control @error('Telp_perusahaan') is-invalid @enderror" name="Telp_perusahaan" id="Telp_perusahaan" placeholder="Contoh: 08XXXXXXXXXX" value="{{ old('Telp-perusahaan', $form->data['step1']['Telp-perusahaan'] ?? '') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="jabatan" class="form-label">Jabatan Saat Ini</label>
                                <input type="text" class="form-control @error('Jabatan') is-invalid @enderror" name="Jabatan" id="Jabatan" placeholder="Contoh: Pegawai" value="{{ old('Jabatan', $form->data['step1']['Jabatan'] ?? '') }}">
                            </div>
                        </div>
                    </div>
                    <h6 class="ket">Keterangan:</h6>
                    <p class="wajib">(*) Wajib diisi</p>
                </div>
                <div class="simpan">
                    <div class="row justify-content-end me-5 mt-5">
                        <div class="col-3">
                            <a href="home" class="btn btn-secondary">Previous</a>
                            <!-- {{-- <button type="submit" class="btn btn-warning"><a href="/pendaftaran2" class="next">Next</a></button> --}} -->
                            <button type="submit" class="btn btn-warning text-white">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function oneSlash(input) {
            var value = input.value,
                value = value.split('/').join('');
            
            if (value.length > 2) {
                value = value.substring(0, value.length - 2) + '/' + value.substring(value.length - 2, value.length);
            }

            input.value = value;
        }
    </script>
</x-layoutform>