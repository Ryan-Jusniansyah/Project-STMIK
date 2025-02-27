@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar2">
            <form action="" method="POST">
                @csrf
                <div class="ortu">
                    <h4 class="juduls2">Identitas Orang Tua/Wali</h4>
                    <div class="lines2"></div>
                    <div class="idayah">
                        <h4 class="juduls3">Identitas Ayah</h4>
                        <div class="lines3"></div>
                        <div class="row row-cols-2 mt-3">
                            <div class="col">
                                <label for="NamaA" class="form-label">Nama *</label>
                                <input type="text" class="form-control  @error('NamaAyah') is-invalid @enderror" name="NamaAyah" value="{{ old('NamaAyah') }}" id="NamaAyah" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikA" class="form-label">NIK *</label>
                                <input type="number" class="form-control @error('NIKayah') is-invalid @enderror" name="NIKayah" value="{{ old('NIKayah') }}" id="NIKayah" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatA" class="form-label">Tempat Lahir *</label>
                                <input type="text" value="{{ old('Tempatlayah') }}" class="form-control @error('Tempatlayah') is-invalid @enderror" name="Tempatlayah" id="Tempatlayah" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllA" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control @error('tgllayah') is-invalid @enderror" name="tgllayah" value="{{ old('tgllayah') }}" id="tgllayah" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaA" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaA" name="PilihanagamaA">
                                    <option selected>Pilih Agama Anda</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen</option>
                                    <option value="3">Katolik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Buddha</option>
                                    <option value="6">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtA" class="select-label">Pendidikan Terakhir *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtA" name="PilihanpendtA">
                                    <option selected>Pilih Pendidikan Terakhir</option>
                                    <option value="1">Pascasarjana (S2/S3)</option>
                                    <option value="2">Sarjana (S1)</option>
                                    <option value="3">Diploma (D1/D2/D3/D4)</option>
                                    <option value="4">SMA/SMK Sederajat</option>
                                    <option value="5">SMP atau sederajat</option>
                                    <option value="6">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerA" class="select-label">Pekerjaan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerA" name="PilihanpekerA">
                                    <option selected>Pilih Pekerjaan Orang Tua</option>
                                    <option value="1">PNS</option>
                                    <option value="2">Karyawan Swasta</option>
                                    <option value="3">Wiraswasta</option>
                                    <option value="4">Petani/peternak/nelayan</option>
                                    <option value="5">Pensiunan</option>
                                    <option value="6">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanA" class="select-label">Penghasilan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanA" name="PilihanpenghasilanA">
                                    <option selected>Pilih Penghasilan</option>
                                    <option value="1">Kurang dari Rp1.000.000</option>
                                    <option value="2">Rp1.000.000 - Rp3.000.000</option>
                                    <option value="3">Rp3.000.000 - Rp5.000.000</option>
                                    <option value="4">Rp.5.000.000 - Rp10.000.000</option>
                                    <option value="5">Rp10.000.000 - Rp20.000.000</option>
                                    <option value="6">Lebih dari Rp20.000.000</option>
                                    <option value="7">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpA" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control @error('nohpayah') is-invalid @enderror" value="{{ old('nohpayah') }}" name="nohpayah" id="nohpayah" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statA" class="select-label">Status Kehidupan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-statA" name="PilihanstatA">
                                    <option selected>Pilih Status Kehidupan</option>
                                    <option value="1">Hidup</option>
                                    <option value="2">Meninggal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="idibu">
                        <h4 class="juduls3">Identitas Ibu</h4>
                        <div class="lines4"></div>
                        <div class="row row-cols-2 mt-3">
                            <div class="col">
                                <label for="NamaI" class="form-label">Nama *</label>
                                <input type="text" class="form-control @error('NamaIbu') is-invalid @enderror" name="NamaIbu" value="{{ old('NamaIbu') }}" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK *</label>
                                <input type="number" class="form-control @error('NIKibu') is-invalid @enderror" value="{{ old('NIKibu') }}" name="NIKibu" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control @error('Tempatlibu') is-invalid @enderror" name="Tempatlibu" value="{{ old('Tempatlibu') }}" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control @error('tgllibu') is-invalid @enderror" value="{{ old('tgllibu') }}" name="tgllibu" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaI" name="PilihanagamaI">
                                    <option selected>Pilih Agama Anda</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen</option>
                                    <option value="3">Katolik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Buddha</option>
                                    <option value="6">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtI" name="PilihanpendtI">
                                    <option selected>Pilih Pendidikan Terakhir</option>
                                    <option value="1">Pascasarjana (S2/S3)</option>
                                    <option value="2">Sarjana (S1)</option>
                                    <option value="3">Diploma (D1/D2/D3/D4)</option>
                                    <option value="4">SMA/SMK Sederajat</option>
                                    <option value="5">SMP atau sederajat</option>
                                    <option value="6">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerI" name="PilihanpekerI">
                                    <option selected>Pilih Pekerjaan Orang Tua</option>
                                    <option value="1">PNS</option>
                                    <option value="2">Karyawan Swasta</option>
                                    <option value="3">Wiraswasta</option>
                                    <option value="4">Petani/peternak/nelayan</option>
                                    <option value="5">Pensiunan</option>
                                    <option value="6">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanI">
                                    <option selected>Pilih Penghasilan</option>
                                    <option value="1">Kurang dari Rp1.000.000</option>
                                    <option value="2">Rp1.000.000 - Rp3.000.000</option>
                                    <option value="3">Rp3.000.000 - Rp5.000.000</option>
                                    <option value="4">Rp.5.000.000 - Rp10.000.000</option>
                                    <option value="5">Rp10.000.000 - Rp20.000.000</option>
                                    <option value="6">Lebih dari Rp20.000.000</option>
                                    <option value="7">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah</label>
                                <input type="number" class="form-control @error('nohpibu') is-invalid @enderror" name="nohpibu" value="{{ old('nohpibu') }}" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statI" class="select-label">Status Kehidupan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-statI" name="PilihanstatI">
                                    <option selected>Pilih Status Kehidupan</option>
                                    <option value="1">Hidup</option>
                                    <option value="2">Meninggal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="idwali">
                        <h4 class="juduls3">Identitas Wali</h4>
                        <div class="lines5"></div>
                        <div class="row row-cols-2 mt-3">
                        <div class="col">
                                <label for="NamaI" class="form-label">Nama *</label>
                                <input type="text" class="form-control @error('NamaWali') is-invalid @enderror" value="{{ old('NamaWali') }}" name="NamaWali" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK *</label>
                                <input type="number" class="form-control @error('NIKWali') is-invalid @enderror" name="NIKWali" value="{{ old('NIKWali') }}" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control @error('Tempatlwali') is-invalid @enderror" value="{{ old('Tempatlwali') }}" name="Tempatlwali" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control @error('tgllwali') is-invalid @enderror" name="tgllwali" value="{{ old('tgllwali') }}" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaI" name="PilihanagamaW">
                                    <option selected>Pilih Agama Anda</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Kristen</option>
                                    <option value="3">Katolik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Buddha</option>
                                    <option value="6">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtI" name="PilihanpendtW">
                                    <option selected>Pilih Pendidikan Terakhir</option>
                                    <option value="1">Pascasarjana (S2/S3)</option>
                                    <option value="2">Sarjana (S1)</option>
                                    <option value="3">Diploma (D1/D2/D3/D4)</option>
                                    <option value="4">SMA/SMK Sederajat</option>
                                    <option value="5">SMP atau sederajat</option>
                                    <option value="6">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerI" name="PilihanpekerW">
                                    <option selected>Pilih Pekerjaan Orang Tua</option>
                                    <option value="1">PNS</option>
                                    <option value="2">Karyawan Swasta</option>
                                    <option value="3">Wiraswasta</option>
                                    <option value="4">Petani/peternak/nelayan</option>
                                    <option value="5">Pensiunan</option>
                                    <option value="6">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanW">
                                    <option selected>Pilih Penghasilan</option>
                                    <option value="1">Kurang dari Rp1.000.000</option>
                                    <option value="2">Rp1.000.000 - Rp3.000.000</option>
                                    <option value="3">Rp3.000.000 - Rp5.000.000</option>
                                    <option value="4">Rp.5.000.000 - Rp10.000.000</option>
                                    <option value="5">Rp10.000.000 - Rp20.000.000</option>
                                    <option value="6">Lebih dari Rp20.000.000</option>
                                    <option value="7">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col-md pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah</label>
                                <input type="number" class="form-control @error('nohpwali') is-invalid @enderror" value="{{ old('nohpwali') }}" name="nohpwali" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                        </div>
                    </div>
                    <div class="alamatortu">
                        <h4 class="juduls3">Alamat Orang Tua/Wali</h4>
                        <div class="lines6"></div>
                        <div class="row row-cols-2 mt-3">
                            <div class="col">
                                <label for="alamatjalan" class="form-label">Alamat Jalan, Nomor/Dusun *</label>
                                <input type="text" class="form-control @error('Alamatjalan') is-invalid @enderror" name="Alamatjalan" value="{{ old('Alamatjalan') }}" id="Alamatjalan" placeholder="Masukkan Alamat Lengkap">
                            </div>
                            <div class="col">
                                <label for="rt-rw-ortu" class="form-label">RT/RW *</label>
                                <input type="text" class="form-control @error('rt-rwortu') is-invalid @enderror" value="{{ old('rt-rwortu') }}" name="rt-rwortu" id="rt-rwortu" placeholder="Contoh : 12/2">
                            </div>
                            <div class="col pt-3">
                                <label for="kodepos-ortu" class="form-label">Kode Pos *</label>
                                <input type="number" class="form-control @error('Kodepos-ortu') is-invalid @enderror" name="Kodepos-ortu" value="{{ old('Kodepos-ortu') }}" id="Kodepos-ortu" placeholder="Contoh : 75117">
                            </div>
                            <div class="col pt-3">
                                <label for="d-kelurahanortu" class="form-label">Desa/Kelurahan *</label>
                                <input type="text" class="form-control @error('d-kelurahanortu') is-invalid @enderror" value="{{ old('d-kelurahanortu') }}" name="d-kelurahanortu" id="d-kelurahanortu" placeholder="Contoh : Karang Anyar">
                            </div>
                            <div class="col pt-3">
                                <label for="kecamatan-ortu" class="form-label">Kecamatan *</label>
                                <input type="text" class="form-control @error('Kecamatan-ortu') is-invalid @enderror" name="Kecamatan-ortu" value="{{ old('Kecamatan-ortu') }}" id="Kecamatan-ortu" placeholder="Contoh : Sungai Pinang">
                            </div>
                            <div class="col pt-3">
                                <label for="kabortu" class="form-label">Kabupaten/Kota *</label>
                                <input type="text" class="form-control @error('kabupatenortu') is-invalid @enderror" value="{{ old('kabupatenortu') }}" name="kabupatenortu" id="kabupatenortu" placeholder="Contoh : Samarinda">
                            </div>
                            <div class="col pt-3">
                                <label for="provortu" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control @error('Provinsiortu') is-invalid @enderror" name="Provinsiortu" value="{{ old('Provinsiortu') }}" id="Provinsiortu" placeholder="Contoh : Kalimantan Timur">
                            </div>
                            <div class="col pt-3">
                                <label for="nohportu" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control @error('nohportu') is-invalid @enderror" value="{{ old('nohportu') }}"  name="nohportu" id="nohportu" placeholder="Cohtoh : +628XXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="Informasi" class="select-label">Mengetahui informasi tentang STMIK Samarinda dari? *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-Informasi" name="PilihanInformasi">
                                    <option selected>Pilih Informasi</option>
                                    <option value="1">Brosur/Pamflet/Poster</option>
                                    <option value="2">Keluarga/Teman/Instansi</option>
                                    <option value="3">Media Sosial</option>
                                    <option value="4">Brosur/Pamflet/Poster & Keluarga/Teman/Instansi</option>
                                    <option value="5">Brosul/Pamflet/Poster & Media Sosial</option>
                                    <option value="6">Keluarga/Teman/Instansi & Media Sosial</option>
                                    <option value="7">Ketiganya</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pilprostu" class="select-label">Program Studi lain yang anda minati: *maks 2 pilihan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-prostu" name="Pilihanprostu">
                                    <option selected>Pilih Program Studi</option>
                                    <option value="1">Informatika</option>
                                    <option value="2">Bisnis Digital</option>
                                    <option value="3">Manajemen</option>
                                    <option value="4">Informatika & Bisnis Digital</option>
                                    <option value="5">Informatika & Manajemen</option>
                                    <option value="6">Bisnis Digital & Manajemen</option>
                                </select>
                            </div>
                        </div>
                        <h6 class="ket1">Keterangan: </h6>
                        <p class="wajib1">(*) Wajib diisi</p>
                    </div>
                </div>
                <div class="simpan">
                    <div class="row justify-content-end me-5 mt-5">
                        <div class="col-3">
                            <a href="pendaftaran2" class="btn btn-secondary">Previous</a>
                            <button type="submit" class="btn btn-warning text-white">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layoutform>