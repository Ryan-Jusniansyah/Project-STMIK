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
                                <label for="NamaA" class="form-label">Nama Ayah *</label>
                                <input type="text" class="form-control  @error('NamaAyah') is-invalid @enderror" name="NamaAyah" value="{{ old('NamaAyah') }}" id="NamaAyah" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikA" class="form-label">NIK Ayah *</label>
                                <input type="number" class="form-control @error('NIKayah') is-invalid @enderror" name="NIKayah" value="{{ old('NIKayah') }}" id="NIKayah" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatA" class="form-label">Tempat Lahir Ayah *</label>
                                <input type="text" value="{{ old('Tempatlayah') }}" class="form-control @error('Tempatlayah') is-invalid @enderror" name="Tempatlayah" id="Tempatlayah" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllA" class="form-label">Tanggal Lahir Ayah *</label>
                                <input type="date" class="form-control @error('tgllayah') is-invalid @enderror" name="tgllayah" value="{{ old('tgllayah') }}" id="tgllayah" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaA" class="select-label">Agama Ayah *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaA" name="PilihanagamaA">
                                    <option selected disabled>Pilih Agama Ayah</option>
                                    <option @if(old('PilihanagamaA') == 'Islam') selected @endif value="Islam">Islam</option>
                                    <option @if(old('PilihanagamaA') == 'Kristen') selected @endif value="Kristen">Kristen</option>
                                    <option @if(old('PilihanagamaA') == 'Katolik') selected @endif value="Katolik">Katolik</option>
                                    <option @if(old('PilihanagamaA') == 'Hindu') selected @endif value="Hindu">Hindu</option>
                                    <option @if(old('PilihanagamaA') == 'Buddha') selected @endif value="Buddha">Buddha</option>
                                    <option @if(old('PilihanagamaA') == 'Konghucu') selected @endif value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtA" class="select-label">Pendidikan Terakhir Ayah *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtA" name="PilihanpendtA">
                                    <option selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option @if(old('PilihanpendtA') == 'Pascasarjana (S2/S3)') selected @endif value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option @if(old('PilihanpendtA') == 'Sarjana (S1)') selected @endif value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option @if(old('PilihanpendtA') == 'Diploma (D1/D2/D3/D4)') selected @endif value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option @if(old('PilihanpendtA') == 'SMA/SMK Sederajat') selected @endif value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option @if(old('PilihanpendtA') == 'SMP atau sederajat') selected @endif value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option @if(old('PilihanpendtA') == 'SD atau sederajat') selected @endif value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerA" class="select-label">Pekerjaan Ayah *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerA" name="PilihanpekerA">
                                    <option selected disabled>Pilih Pekerjaan Ayah</option>
                                    <option @if(old('PilihanpekerA') == 'PNS') selected @endif value="PNS">PNS</option>
                                    <option @if(old('PilihanpekerA') == 'Karyawan Swasta') selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option @if(old('PilihanpekerA') == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                                    <option @if(old('PilihanpekerA') == 'Petani/peternak/nelayan') selected @endif value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option @if(old('PilihanpekerA') == 'Pensiunan') selected @endif value="Pensiunan">Pensiunan</option>
                                    <option @if(old('PilihanpekerA') == 'Tidak Bekerja') selected @endif value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanA" class="select-label">Penghasilan Ayah *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanA" name="PilihanpenghasilanA">
                                    <option selected disabled>Pilih Penghasilan Ayah</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Kurang dari Rp1.000.000') selected @endif value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Rp1.000.000 - Rp3.000.000') selected @endif value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Rp3.000.000 - Rp5.000.000') selected @endif value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Rp.5.000.000 - Rp10.000.000') selected @endif value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Rp10.000.000 - Rp20.000.000') selected @endif value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Lebih dari Rp20.000.000') selected @endif value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option @if(old('PilihanpenghasilanA') == 'Tidak berpenghasilan') selected @endif value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpA" class="form-label">Handphone/Telp.Rumah Ayah *</label>
                                <input type="number" class="form-control @error('nohpayah') is-invalid @enderror" value="{{ old('nohpayah') }}" name="nohpayah" id="nohpayah" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statA" class="select-label">Status Kehidupan Ayah *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-statA" name="PilihanstatA">
                                    <option selected disabled>Pilih Status Kehidupan</option>
                                    <option @if(old('PilihanstatA') == 'Hidup') selected @endif value="Hidup">Hidup</option>
                                    <option @if(old('PilihanstatA') == 'Meninggal') selected @endif value="Meninggal">Meninggal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="idibu">
                        <h4 class="juduls3">Identitas Ibu</h4>
                        <div class="lines4"></div>
                        <div class="row row-cols-2 mt-3">
                            <div class="col">
                                <label for="NamaI" class="form-label">Nama Ibu *</label>
                                <input type="text" class="form-control @error('NamaIbu') is-invalid @enderror" name="NamaIbu" value="{{ old('NamaIbu') }}" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK Ibu *</label>
                                <input type="number" class="form-control @error('NIKibu') is-invalid @enderror" value="{{ old('NIKibu') }}" name="NIKibu" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir Ibu *</label>
                                <input type="text" class="form-control @error('Tempatlibu') is-invalid @enderror" name="Tempatlibu" value="{{ old('Tempatlibu') }}" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir Ibu *</label>
                                <input type="date" class="form-control @error('tgllibu') is-invalid @enderror" value="{{ old('tgllibu') }}" name="tgllibu" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama Ibu *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaI" name="PilihanagamaI">
                                    <option selected disabled>Pilih Agama Ibu</option>
                                    <option @if(old('PilihanagamaI') == 'Islam') selected @endif value="Islam">Islam</option>
                                    <option @if(old('PilihanagamaI') == 'Kristen') selected @endif value="Kristen">Kristen</option>
                                    <option @if(old('PilihanagamaI') == 'Katolik') selected @endif value="Katolik">Katolik</option>
                                    <option @if(old('PilihanagamaI') == 'Hindu') selected @endif value="Hindu">Hindu</option>
                                    <option @if(old('PilihanagamaI') == 'Buddha') selected @endif value="Buddha">Buddha</option>
                                    <option @if(old('PilihanagamaI') == 'Konghucu') selected @endif value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir Ibu *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtI" name="PilihanpendtI">
                                    <option selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option @if(old('PilihanpendtI') == 'Pascasarjana (S2/S3)') selected @endif value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option @if(old('PilihanpendtI') == 'Sarjana (S1)') selected @endif value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option @if(old('PilihanpendtI') == 'Diploma (D1/D2/D3/D4)') selected @endif value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option @if(old('PilihanpendtI') == 'SMA/SMK Sederajat') selected @endif value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option @if(old('PilihanpendtI') == 'SMP atau sederajat') selected @endif value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option @if(old('PilihanpendtI') == 'SD atau sederajat') selected @endif value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan Ibu *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerI" name="PilihanpekerI">
                                    <option selected disabled>Pilih Pekerjaan Ibu</option>
                                    <option @if(old('PilihanpekerI') == 'PNS') selected @endif value="PNS">PNS</option>
                                    <option @if(old('PilihanpekerI') == 'Karyawan Swasta') selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option @if(old('PilihanpekerI') == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                                    <option @if(old('PilihanpekerI') == 'Petani/peternak/nelayan') selected @endif value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option @if(old('PilihanpekerI') == 'Pensiunan') selected @endif value="Pensiunan">Pensiunan</option>
                                    <option @if(old('PilihanpekerI') == 'Tidak Bekerja') selected @endif value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan Ibu *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanI">
                                    <option selected disabled>Pilih Penghasilan Ibu</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Kurang dari Rp1.000.000') selected @endif value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Rp1.000.000 - Rp3.000.000') selected @endif value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Rp3.000.000 - Rp5.000.000') selected @endif value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Rp.5.000.000 - Rp10.000.000') selected @endif value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Rp10.000.000 - Rp20.000.000') selected @endif value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Lebih dari Rp20.000.000') selected @endif value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option @if(old('PilihanpenghasilanI') == 'Tidak berpenghasilan') selected @endif value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah Ibu</label>
                                <input type="number" class="form-control @error('nohpibu') is-invalid @enderror" name="nohpibu" value="{{ old('nohpibu') }}" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statI" class="select-label">Status Kehidupan Ibu *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-statI" name="PilihanstatI">
                                    <option selected disabled>Pilih Status Kehidupan</option>
                                    <option @if(old('PilihanstatI') == 'Hidup') selected @endif value="Hidup">Hidup</option>
                                    <option @if(old('PilihanstatI') == 'Meninggal') selected @endif value="Meninggal">Meninggal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="idwali">
                        <h4 class="juduls3">Identitas Wali (Jika Diperlukan)</h4>
                        <div class="lines5"></div>
                        <div class="row row-cols-2 mt-3">
                        <div class="col">
                                <label for="NamaI" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('NamaWali') is-invalid @enderror" value="{{ old('NamaWali') }}" name="NamaWali" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK</label>
                                <input type="number" class="form-control @error('NIKWali') is-invalid @enderror" name="NIKWali" value="{{ old('NIKWali') }}" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control @error('Tempatlwali') is-invalid @enderror" value="{{ old('Tempatlwali') }}" name="Tempatlwali" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tgllwali') is-invalid @enderror" name="tgllwali" value="{{ old('tgllwali') }}" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaI" name="PilihanagamaW">
                                    <option selected disabled>Pilih Agama</option>
                                    <option @if(old('PilihanagamaW') == 'Islam') selected @endif value="Islam">Islam</option>
                                    <option @if(old('PilihanagamaW') == 'Kristen') selected @endif value="Kristen">Kristen</option>
                                    <option @if(old('PilihanagamaW') == 'Katolik') selected @endif value="Katolik">Katolik</option>
                                    <option @if(old('PilihanagamaW') == 'Hindu') selected @endif value="Hindu">Hindu</option>
                                    <option @if(old('PilihanagamaW') == 'Buddha') selected @endif value="Buddha">Buddha</option>
                                    <option @if(old('PilihanagamaW') == 'Konghucu') selected @endif value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtI" name="PilihanpendtW">
                                    <option selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option @if(old('PilihanpendtW') == 'Pascasarjana (S2/S3)') selected @endif value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option @if(old('PilihanpendtW') == 'Sarjana (S1)') selected @endif value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option @if(old('PilihanpendtW') == 'Diploma (D1/D2/D3/D4)') selected @endif value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option @if(old('PilihanpendtW') == 'SMA/SMK Sederajat') selected @endif value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option @if(old('PilihanpendtW') == 'SMP atau sederajat') selected @endif value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option @if(old('PilihanpendtW') == 'SD atau sederajat') selected @endif value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerI" name="PilihanpekerW">
                                    <option selected disabled>Pilih Pekerjaan</option>
                                    <option @if(old('PilihanpekerW') == 'PNS') selected @endif value="PNS">PNS</option>
                                    <option @if(old('PilihanpekerW') == 'Karyawan Swasta') selected @endif value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option @if(old('PilihanpekerW') == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                                    <option @if(old('PilihanpekerW') == 'Petani/peternak/nelayan') selected @endif value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option @if(old('PilihanpekerW') == 'Pensiunan') selected @endif value="Pensiunan">Pensiunan</option>
                                    <option @if(old('PilihanpekerW') == 'Tidak Bekerja') selected @endif value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanW">
                                    <option selected disabled>Pilih Penghasilan</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Kurang dari Rp1.000.000') selected @endif value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Rp1.000.000 - Rp3.000.000') selected @endif value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Rp3.000.000 - Rp5.000.000') selected @endif value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Rp.5.000.000 - Rp10.000.000') selected @endif value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Rp10.000.000 - Rp20.000.000') selected @endif value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Lebih dari Rp20.000.000') selected @endif value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option @if(old('PilihanpenghasilanW') == 'Tidak berpenghasilan') selected @endif value="Tidak berpenghasilan">Tidak berpenghasilan</option>
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
                                <input type="text" onkeyup="oneSlash(this)" class="form-control @error('rt-rwortu') is-invalid @enderror" value="{{ old('rt-rwortu') }}" name="rt-rwortu" id="rt-rwortu" placeholder="Contoh : 12/2">
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
                                    <option value="Brosur/Pamflet/Poster">Brosur/Pamflet/Poster</option>
                                    <option value="Keluarga/Teman/Instansi">Keluarga/Teman/Instansi</option>
                                    <option value="Media Sosial">Media Sosial</option>
                                    <option value="Brosur/Pamflet/Poster & Keluarga/Teman/Instansi">Brosur/Pamflet/Poster & Keluarga/Teman/Instansi</option>
                                    <option value="Brosur/Pamflet/Poster & Media Sosial">Brosur/Pamflet/Poster & Media Sosial</option>
                                    <option value="Keluarga/Teman/Instansi & Media Sosial">Keluarga/Teman/Instansi & Media Sosial</option>
                                    <option value="Ketiganya">Ketiganya</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pilprostu" class="select-label">Program Studi lain yang anda minati: *maks 2 pilihan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-prostu" name="Pilihanprostu">
                                    <option selected>Pilih Program Studi</option>
                                    <option value="Informatika">Informatika</option>
                                    <option value="Bisnis Digital">Bisnis Digital</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Informatika & Bisnis Digital">Informatika & Bisnis Digital</option>
                                    <option value="Informatika & Manajemen">Informatika & Manajemen</option>
                                    <option value="Bisnis Digital & Manajemen">Bisnis Digital & Manajemen</option>
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