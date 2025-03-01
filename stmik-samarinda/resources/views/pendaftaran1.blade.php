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
                                <select class="form-select mt-2 @error('Pilkelas') is-invalid @enderror" aria-label="Pilihan-Kelas" name="Pilihankelas">
                                    <option selected disabled>Masukkan Pilihan Kelas</option>
                                    <option @if(old('Pilihankelas') == 'Pagi (Offline)') selected @endif value="Pagi (Offline)">Pagi (Offline)</option>
                                    <option @if(old('Pilihankelas') == 'Malam (Online)') selected @endif value="Malam (Online)">Malam (Online)</option>
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
                                <input type="text" class="form-control @error('Namalengkap') is-invalid @enderror" name="Namalengkap" id="NamaLengkap" placeholder="Masukkan Nama Lengkap" value="{{ old('Namalengkap') }}">
                            </div>
                            <div class="col">
                                <label for="NIK" class="form-label">NIK *</label>
                                <input type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK" id="nik" placeholder="Masukkan NIK anda" value="{{ old('NIK') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="NPWP" class="form-label">NPWP</label>
                                <input type="number" class="form-control @error('NPWP') is-invalid @enderror" name="NPWP" id="npwp" placeholder="Masukkan NPWP anda" value="{{ old('NPWP') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="NISN" class="form-label">NISN *</label>
                                <input type="text" class="form-control @error('NISN') is-invalid @enderror" name="NISN" id="nisn" placeholder="Masukkan NISN anda" value="{{ old('NISN') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="Piljk" class="select-label">Jenis Kelamin *</label>
                                <select class="form-select mt-2 @error('pilihanjk') is-invalid @enderror" aria-label="Pilihan-jk" name='pilihanjk'>
                                    <option value="" disabled selected>Jenis Kelamin</option>
                                    <option @if(old('pilihanjk') == 'Laki-laki') selected @endif value="Laki-laki">Laki-Laki</option>
                                    <option @if(old('pilihanjk') == 'Perempuan') selected @endif value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="Tl" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control @error('Tempatlahir') is-invalid @enderror" name="Tempatlahir" id="tempatlahir" placeholder="Kota Asal" value="{{ old('Tempatlahir') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="tglahir" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control @error('Tanggallahir') is-invalid @enderror" name="Tanggallahir" id="tanggallahir" placeholder="DD/MM/YYYY" value="{{ old('Tanggallahir') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="bb-tb" class="form-label">Berat/Tinggi Badan *</label>
                                <input type="text" class="form-control @error('berat-tinggibadan') is-invalid @enderror" name="berat-tinggibadan" id="b-tb" placeholder="Contoh: 70kg/170cm" value="{{ old('berat-tinggibadan') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="Pilagama" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-Agama" name="Pilihanagama">
                                    <option selected disabled>Pilih Agama Anda</option>
                                    <option @if(old('Pilihanagama') == 'Islam') selected @endif value="Islam">Islam</option>
                                    <option @if(old('Pilihanagama') == 'Kristen') selected @endif value="Kristen">Kristen</option>
                                    <option @if(old('Pilihanagama') == 'Katolik') selected @endif value="Katolik">Katolik</option>
                                    <option @if(old('Pilihanagama') == 'Hindu') selected @endif value="Hindu">Hindu</option>
                                    <option @if(old('Pilihanagama') == 'Buddha') selected @endif value="Buddha">Buddha</option>
                                    <option @if(old('Pilihanagama') == 'Konghucu') selected @endif value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="Pilstatpernikahan" class="select-label">Status Pernikahan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pernikahan" name="Pilihanpernikahan">
                                    <option selected disabled>Status Pernikahan</option>
                                    <option @if(old('Pilihanpernikahan') == 'Belum Menikah') selected @endif value="Belum Menikah">Belum Menikah</option>
                                    <option @if(old('Pilihanpernikahan') == 'Sudah Menikah') selected @endif value="Sudah Menikah">Sudah Menikah</option>
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
                                <input type="text" class="form-control @error('tinggalbersama') is-invalid @enderror" name="tinggalbersama" id="tglbersama" placeholder="Contoh: Orang Tua" value="{{ old('tinggalbersama') }}">
                            </div>
                            <div class="col">
                                <label for="alamat1" class="form-label">Alamat *</label>
                                <input type="text" class="form-control @error('Alamat') is-invalid @enderror" name="Alamat" id="alamat1" placeholder="Contoh: Jalan Piano" value="{{ old('Alamat') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="codepos" class="form-label">Kode Pos *</label>
                                <input type="number" class="form-control @error('Kodepos') is-invalid @enderror" name="Kodepos" id="Kodepos" placeholder="Contoh: 75100" value="{{ old('Kodepos') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="rt-rw" class="form-label">RT/RW *</label>
                                <input type="text" onkeyup="oneSlash(this)" class="form-control @error('RT-RW') is-invalid @enderror" name="RT-RW" id="rt-rw1" placeholder="Contoh: 1/10" value="{{ old('RT-RW') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="desa-k" class="form-label">Desa/Kelurahan *</label>
                                <input type="text" class="form-control @error('d-kelurahan') is-invalid @enderror" name="d-kelurahan" id="d-keluharan" placeholder="Contoh: Kelurahan Air Hitam" value="{{ old('d-kelurahan') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="kec" class="form-label">Kecamatan *</label>
                                <input type="text" class="form-control @error('Kecamatan') is-invalid @enderror" name="Kecamatan" id="Kecamatan" placeholder="Contoh: Kecamatan Samarinda Ulu" value="{{ old('Kecamatan') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="kab" class="form-label">Kabupaten *</label>
                                <input type="text" class="form-control @error('Kabupaten') is-invalid @enderror" name="Kabupaten" id="Kabupaten" placeholder="Contoh: Kabupaten Kurtai Kartanegara" value="{{ old('Kabupaten') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="prov" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control @error('Provinsi') is-invalid @enderror" name="Provinsi" id="Provinsi" placeholder="Contoh: Kalimantan Timur" value="{{ old('Provinsi') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="neg" class="form-label">Negara *</label>
                                <input type="text" class="form-control @error('Negara') is-invalid @enderror" name="Negara" id="Negara" placeholder="Contoh: Indonesia" value="{{ old('Negara') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="notelp" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control @error('notelp-hp') is-invalid @enderror" name="notelp-hp" id="notelp-hp" placeholder="Contoh: 08XXXXXXXXXX" value="{{ old('notelp-hp') }}">
                            </div>
                            <div class="col pt-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control @error('Email') is-invalid @enderror" name="Email" id="Email" placeholder="Contoh: user@gmail.com (aktif)" value="{{ old('Email') }}">
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
                                <input type="text" class="form-control" name="Namaperu" id="Namaperu" placeholder="Contoh: PT.PAMA">
                            </div>
                            <div class="col">
                                <label for="alamatperusahaan" class="form-label">Alamat Perusahaan</label>
                                <input type="text" class="form-control" name="Alamatperu" id="Alamatperu" placeholder="Contoh: Jalan Damai">
                            </div>
                            <div class="col pt-3">
                                <label for="telp-perusahaan" class="form-label">No. Telpon Perusahaan</label>
                                <input type="number" class="form-control" name="Telp-perusahaan" id="Telp-perusahaan" placeholder="Contoh: 08XXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="jabatan" class="form-label">Jabatan Saat Ini</label>
                                <input type="text" class="form-control" name="Jabatan" id="Jabatan" placeholder="Contoh: Pegawai">
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