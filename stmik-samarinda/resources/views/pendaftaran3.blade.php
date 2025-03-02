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
                                <input type="text" class="form-control  @error('NamaAyah') is-invalid @enderror" name="NamaAyah" value="{{ old('NamaAyah', $form->data['step3']['NamaAyah'] ?? '') }}" id="NamaAyah" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikA" class="form-label">NIK Ayah *</label>
                                <input type="number" class="form-control @error('NIKayah') is-invalid @enderror" name="NIKayah" value="{{ old('NIKayah', $form->data['step3']['NIKayah'] ?? '') }}" id="NIKayah" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatA" class="form-label">Tempat Lahir Ayah *</label>
                                <input type="text" value="{{ old('Tempatlayah', $form->data['step3']['Tempatlayah'] ?? '') }}" class="form-control @error('Tempatlayah') is-invalid @enderror" name="Tempatlayah" id="Tempatlayah" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllA" class="form-label">Tanggal Lahir Ayah *</label>
                                <input type="date" max="{{ date('Y-m-d') }}" class="form-control @error('tgllayah') is-invalid @enderror" name="tgllayah" value="{{ old('tgllayah', $form->data['step3']['tgllayah'] ?? '') }}" id="tgllayah" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaA" class="select-label">Agama Ayah *</label>
                                <select class="form-select mt-2 @error('PilihanagamaA') is-invalid @enderror" aria-label="Pilihan-agamaA" name="PilihanagamaA">
                                    <option selected disabled>Pilih Agama Ayah</option>
                                    <option {{ old('PilihanagamaA', $form->data['step3']['PilihanagamaA'] ?? '') == 'Islam' ? 'selected' : '' }} value="Islam">Islam</option>
                                    <option {{ old('PilihanagamaA', $form->data['step3']['PilihanagamaA'] ?? '') == 'Kristen' ? 'selected' : '' }} value="Kristen">Kristen</option>
                                    <option {{ old('PilihanagamaA', $form->data['step3']['PilihanagamaA'] ?? '') == 'Katolik' ? 'selected' : '' }} value="Katolik">Katolik</option>
                                    <option {{ old('PilihanagamaA', $form->data['step3']['PilihanagamaA'] ?? '') == 'Hindu' ? 'selected' : '' }} value="Hindu">Hindu</option>
                                    <option {{ old('PilihanagamaA', $form->data['step3']['PilihanagamaA'] ?? '') == 'Buddha' ? 'selected' : '' }} value="Buddha">Buddha</option>
                                    <option {{ old('PilihanagamaA', $form->data['step3']['PilihanagamaA'] ?? '') == 'Konghucu' ? 'selected' : '' }} value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtA" class="select-label">Pendidikan Terakhir Ayah *</label>
                                <select class="form-select mt-2 @error('PilihanpendtA') is-invalid @enderror" aria-label="Pilihan-pendtA" name="PilihanpendtA">
                                    <option selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option {{ old('PilihanpendtA', $form->data['step3']['PilihanpendtA'] ?? '') == 'Pascasarjana (S2/S3)' ? 'selected' : '' }} value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option {{ old('PilihanpendtA', $form->data['step3']['PilihanpendtA'] ?? '') == 'Sarjana (S1)' ? 'selected' : '' }} value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option {{ old('PilihanpendtA', $form->data['step3']['PilihanpendtA'] ?? '') == 'Diploma (D1/D2/D3/D4)' ? 'selected' : '' }} value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option {{ old('PilihanpendtA', $form->data['step3']['PilihanpendtA'] ?? '') == 'SMA/SMK Sederajat' ? 'selected' : '' }} value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option {{ old('PilihanpendtA', $form->data['step3']['PilihanpendtA'] ?? '') == 'SMP atau sederajat' ? 'selected' : '' }} value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option {{ old('PilihanpendtA', $form->data['step3']['PilihanpendtA'] ?? '') == 'SD atau sederajat' ? 'selected' : '' }} value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerA" class="select-label">Pekerjaan Ayah *</label>
                                <select class="form-select mt-2 @error('PilihanpekerA') is-invalid @enderror" aria-label="Pilihan-pekerA" name="PilihanpekerA">
                                    <option selected disabled>Pilih Pekerjaan Ayah</option>
                                    <option {{ old('PilihanpekerA', $form->data['step3']['PilihanpekerA'] ?? '') == 'PNS' ? 'selected' : '' }} value="PNS">PNS</option>
                                    <option {{ old('PilihanpekerA', $form->data['step3']['PilihanpekerA'] ?? '') == 'Karyawan Swasta' ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option {{ old('PilihanpekerA', $form->data['step3']['PilihanpekerA'] ?? '') == 'Wiraswasta' ? 'selected' : '' }} value="Wiraswasta">Wiraswasta</option>
                                    <option {{ old('PilihanpekerA', $form->data['step3']['PilihanpekerA'] ?? '') == 'Petani/peternak/nelayan' ? 'selected' : '' }} value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option {{ old('PilihanpekerA', $form->data['step3']['PilihanpekerA'] ?? '') == 'Pensiunan' ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                    <option {{ old('PilihanpekerA', $form->data['step3']['PilihanpekerA'] ?? '') == 'Tidak Bekerja' ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanA" class="select-label">Penghasilan Ayah *</label>
                                <select class="form-select mt-2 @error('PilihanpenghasilanA') is-invalid @enderror" aria-label="Pilihan-penghasilanA" name="PilihanpenghasilanA">
                                    <option selected disabled>Pilih Penghasilan Ayah</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Kurang dari Rp1.000.000' ? 'selected' : '' }} value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Rp1.000.000 - Rp3.000.000' ? 'selected' : '' }} value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Rp3.000.000 - Rp5.000.000' ? 'selected' : '' }} value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Rp.5.000.000 - Rp10.000.000' ? 'selected' : '' }} value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Rp10.000.000 - Rp20.000.000' ? 'selected' : '' }} value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Lebih dari Rp20.000.000' ? 'selected' : '' }} value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option {{ old('PilihanpenghasilanA', $form->data['step3']['PilihanpenghasilanA'] ?? '') == 'Tidak berpenghasilan' ? 'selected' : '' }} value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpA" class="form-label">Handphone/Telp.Rumah Ayah *</label>
                                <input type="number" class="form-control @error('nohpayah') is-invalid @enderror" value="{{ old('nohpayah', $form->data['step3']['nohpayah'] ?? '') }}" name="nohpayah" id="nohpayah" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statA" class="select-label">Status Kehidupan Ayah *</label>
                                <select class="form-select mt-2 @error('PilihanstatA') is-invalid @enderror" aria-label="Pilihan-statA" name="PilihanstatA">
                                    <option selected disabled>Pilih Status Kehidupan</option>
                                    <option {{ old('PilihanstatA', $form->data['step3']['PilihanstatA'] ?? '') == 'Hidup' ? 'selected' : '' }} value="Hidup">Hidup</option>
                                    <option {{ old('PilihanstatA', $form->data['step3']['PilihanstatA'] ?? '') == 'Meninggal' ? 'selected' : '' }} value="Meninggal">Meninggal</option>
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
                                <input type="text" class="form-control @error('NamaIbu') is-invalid @enderror" name="NamaIbu" value="{{ old('NamaIbu', $form->data['step3']['NamaIbu'] ?? '') }}" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK Ibu *</label>
                                <input type="number" class="form-control @error('NIKibu') is-invalid @enderror" value="{{ old('NIKibu', $form->data['step3']['NIKibu'] ?? '') }}" name="NIKibu" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir Ibu *</label>
                                <input type="text" class="form-control @error('Tempatlibu') is-invalid @enderror" name="Tempatlibu" value="{{ old('Tempatlibu', $form->data['step3']['Tempatlibu'] ?? '') }}" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir Ibu *</label>
                                <input type="date" max="{{ date('Y-m-d') }}" class="form-control @error('tgllibu') is-invalid @enderror" value="{{ old('tgllibu', $form->data['step3']['tgllibu'] ?? '') }}" name="tgllibu" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama Ibu *</label>
                                <select class="form-select mt-2 @error('PilihanagamaI') is-invalid @enderror" aria-label="Pilihan-agamaI" name="PilihanagamaI">
                                    <option selected disabled>Pilih Agama Ibu</option>
                                    <option {{ old('PilihanagamaI', $form->data['step3']['PilihanagamaI'] ?? '') == 'Islam' ? 'selected' : '' }} value="Islam">Islam</option>
                                    <option {{ old('PilihanagamaI', $form->data['step3']['PilihanagamaI'] ?? '') == 'Kristen' ? 'selected' : '' }} value="Kristen">Kristen</option>
                                    <option {{ old('PilihanagamaI', $form->data['step3']['PilihanagamaI'] ?? '') == 'Katolik' ? 'selected' : '' }} value="Katolik">Katolik</option>
                                    <option {{ old('PilihanagamaI', $form->data['step3']['PilihanagamaI'] ?? '') == 'Hindu' ? 'selected' : '' }} value="Hindu">Hindu</option>
                                    <option {{ old('PilihanagamaI', $form->data['step3']['PilihanagamaI'] ?? '') == 'Buddha' ? 'selected' : '' }} value="Buddha">Buddha</option>
                                    <option {{ old('PilihanagamaI', $form->data['step3']['PilihanagamaI'] ?? '') == 'Konghucu' ? 'selected' : '' }} value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir Ibu *</label>
                                <select class="form-select mt-2 @error('PilihanpendtI') is-invalid @enderror" aria-label="Pilihan-pendtI" name="PilihanpendtI">
                                    <option selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option {{ old('PilihanpendtI', $form->data['step3']['PilihanpendtI'] ?? '') == 'Pascasarjana (S2/S3)' ? 'selected' : '' }} value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option {{ old('PilihanpendtI', $form->data['step3']['PilihanpendtI'] ?? '') == 'Sarjana (S1)' ? 'selected' : '' }} value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option {{ old('PilihanpendtI', $form->data['step3']['PilihanpendtI'] ?? '') == 'Diploma (D1/D2/D3/D4)' ? 'selected' : '' }} value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option {{ old('PilihanpendtI', $form->data['step3']['PilihanpendtI'] ?? '') == 'SMA/SMK Sederajat' ? 'selected' : '' }} value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option {{ old('PilihanpendtI', $form->data['step3']['PilihanpendtI'] ?? '') == 'SMP atau sederajat' ? 'selected' : '' }} value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option {{ old('PilihanpendtI', $form->data['step3']['PilihanpendtI'] ?? '') == 'SD atau sederajat' ? 'selected' : '' }} value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan Ibu *</label>
                                <select class="form-select mt-2 @error('PilihanpekerI') is-invalid @enderror" aria-label="Pilihan-pekerI" name="PilihanpekerI">
                                    <option selected disabled>Pilih Pekerjaan Ibu</option>
                                    <option {{ old('PilihanpekerI', $form->data['step3']['PilihanpekerI'] ?? '') == 'PNS' ? 'selected' : '' }} value="PNS">PNS</option>
                                    <option {{ old('PilihanpekerI', $form->data['step3']['PilihanpekerI'] ?? '') == 'Karyawan Swasta' ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option {{ old('PilihanpekerI', $form->data['step3']['PilihanpekerI'] ?? '') == 'Wiraswasta' ? 'selected' : '' }} value="Wiraswasta">Wiraswasta</option>
                                    <option {{ old('PilihanpekerI', $form->data['step3']['PilihanpekerI'] ?? '') == 'Petani/peternak/nelayan' ? 'selected' : '' }} value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option {{ old('PilihanpekerI', $form->data['step3']['PilihanpekerI'] ?? '') == 'Pensiunan' ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                    <option {{ old('PilihanpekerI', $form->data['step3']['PilihanpekerI'] ?? '') == 'Tidak Bekerja' ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan Ibu *</label>
                                <select class="form-select mt-2 @error('PilihanpenghasilanI') is-invalid @enderror" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanI">
                                    <option selected disabled>Pilih Penghasilan Ibu</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Kurang dari Rp1.000.000' ? 'selected' : '' }} value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Rp1.000.000 - Rp3.000.000' ? 'selected' : '' }} value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Rp3.000.000 - Rp5.000.000' ? 'selected' : '' }} value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Rp.5.000.000 - Rp10.000.000' ? 'selected' : '' }} value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Rp10.000.000 - Rp20.000.000' ? 'selected' : '' }} value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Lebih dari Rp20.000.000' ? 'selected' : '' }} value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option {{ old('PilihanpenghasilanI', $form->data['step3']['PilihanpenghasilanI'] ?? '') == 'Tidak berpenghasilan' ? 'selected' : '' }} value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah Ibu</label>
                                <input type="number" class="form-control @error('nohpibu') is-invalid @enderror" name="nohpibu" value="{{ old('nohpibu', $form->data['step3']['nohpibu'] ?? '') }}" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statI" class="select-label">Status Kehidupan Ibu *</label>
                                <select class="form-select mt-2 @error('PilihanstatI') is-invalid @enderror" aria-label="Pilihan-statI" name="PilihanstatI">
                                    <option selected disabled>Pilih Status Kehidupan</option>
                                    <option {{ old('PilihanstatI', $form->data['step3']['PilihanstatI'] ?? '') == 'Hidup' ? 'selected' : '' }} value="Hidup">Hidup</option>
                                    <option {{ old('PilihanstatI', $form->data['step3']['PilihanstatI'] ?? '') == 'Meninggal' ? 'selected' : '' }} value="Meninggal">Meninggal</option>
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
                                <input type="text" class="form-control @error('NamaWali') is-invalid @enderror" value="{{ old('NamaWali', $form->data['step3']['NamaWali'] ?? '') }}" name="NamaWali" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK</label>
                                <input type="number" class="form-control @error('NIKWali') is-invalid @enderror" name="NIKWali" value="{{ old('NIKWali', $form->data['step3']['NIKWali'] ?? '') }}" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control @error('Tempatlwali') is-invalid @enderror" value="{{ old('Tempatlwali', $form->data['step3']['Tempatlwali'] ?? '') }}" name="Tempatlwali" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir</label>
                                <input type="date" max="{{ date('Y-m-d') }}" class="form-control @error('tgllwali') is-invalid @enderror" name="tgllwali" value="{{ old('tgllwali', $form->data['step3']['tgllwali'] ?? '') }}" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama</label>
                                <select class="form-select mt-2 @error('PilihanagamaW') is-invalid @enderror" aria-label="Pilihan-agamaI" name="PilihanagamaW">
                                    <option selected disabled>Pilih Agama</option>
                                    <option {{ old('PilihanagamaW', $form->data['step3']['PilihanagamaW'] ?? '') == 'Islam' ? 'selected' : '' }} value="Islam">Islam</option>
                                    <option {{ old('PilihanagamaW', $form->data['step3']['PilihanagamaW'] ?? '') == 'Kristen' ? 'selected' : '' }} value="Kristen">Kristen</option>
                                    <option {{ old('PilihanagamaW', $form->data['step3']['PilihanagamaW'] ?? '') == 'Katolik' ? 'selected' : '' }} value="Katolik">Katolik</option>
                                    <option {{ old('PilihanagamaW', $form->data['step3']['PilihanagamaW'] ?? '') == 'Hindu' ? 'selected' : '' }} value="Hindu">Hindu</option>
                                    <option {{ old('PilihanagamaW', $form->data['step3']['PilihanagamaW'] ?? '') == 'Buddha' ? 'selected' : '' }} value="Buddha">Buddha</option>
                                    <option {{ old('PilihanagamaW', $form->data['step3']['PilihanagamaW'] ?? '') == 'Konghucu' ? 'selected' : '' }} value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir</label>
                                <select class="form-select mt-2 @error('PilihanpendtW') is-invalid @enderror" aria-label="Pilihan-pendtI" name="PilihanpendtW">
                                    <option selected disabled>Pilih Pendidikan Terakhir</option>
                                    <option {{ old('PilihanpendtW', $form->data['step3']['PilihanpendtW'] ?? '') == 'Pascasarjana (S2/S3)' ? 'selected' : '' }} value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option {{ old('PilihanpendtW', $form->data['step3']['PilihanpendtW'] ?? '') == 'Sarjana (S1)' ? 'selected' : '' }} value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option {{ old('PilihanpendtW', $form->data['step3']['PilihanpendtW'] ?? '') == 'Diploma (D1/D2/D3/D4)' ? 'selected' : '' }} value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option {{ old('PilihanpendtW', $form->data['step3']['PilihanpendtW'] ?? '') == 'SMA/SMK Sederajat' ? 'selected' : '' }} value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option {{ old('PilihanpendtW', $form->data['step3']['PilihanpendtW'] ?? '') == 'SMP atau sederajat' ? 'selected' : '' }} value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option {{ old('PilihanpendtW', $form->data['step3']['PilihanpendtW'] ?? '') == 'SD atau sederajat' ? 'selected' : '' }} value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan</label>
                                <select class="form-select mt-2 @error('PilihanpekerW') is-invalid @enderror" aria-label="Pilihan-pekerI" name="PilihanpekerW">
                                    <option selected disabled>Pilih Pekerjaan</option>
                                    <option {{ old('PilihanpekerW', $form->data['step3']['PilihanpekerW'] ?? '') == 'PNS' ? 'selected' : '' }} value="PNS">PNS</option>
                                    <option {{ old('PilihanpekerW', $form->data['step3']['PilihanpekerW'] ?? '') == 'Karyawan Swasta' ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option {{ old('PilihanpekerW', $form->data['step3']['PilihanpekerW'] ?? '') == 'Wiraswasta' ? 'selected' : '' }} value="Wiraswasta">Wiraswasta</option>
                                    <option {{ old('PilihanpekerW', $form->data['step3']['PilihanpekerW'] ?? '') == 'Petani/peternak/nelayan' ? 'selected' : '' }} value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option {{ old('PilihanpekerW', $form->data['step3']['PilihanpekerW'] ?? '') == 'Pensiunan' ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                    <option {{ old('PilihanpekerW', $form->data['step3']['PilihanpekerW'] ?? '') == 'Tidak Bekerja' ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan</label>
                                <select class="form-select mt-2 @error('PilihanpenghasilanW') is-invalid @enderror" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanW">
                                    <option selected disabled>Pilih Penghasilan</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Kurang dari Rp1.000.000' ? 'selected' : '' }} value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Rp1.000.000 - Rp3.000.000' ? 'selected' : '' }} value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Rp3.000.000 - Rp5.000.000' ? 'selected' : '' }} value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Rp.5.000.000 - Rp10.000.000' ? 'selected' : '' }} value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Rp10.000.000 - Rp20.000.000' ? 'selected' : '' }} value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Lebih dari Rp20.000.000' ? 'selected' : '' }} value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option {{ old('PilihanpenghasilanW', $form->data['step3']['PilihanpenghasilanW'] ?? '') == 'Tidak berpenghasilan' ? 'selected' : '' }} value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col-md pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah</label>
                                <input type="number" class="form-control @error('nohpwali') is-invalid @enderror" value="{{ old('nohpwali', $form->data['step3']['nohpwali'] ?? '') }}" name="nohpwali" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                        </div>
                    </div>
                    <div class="alamatortu">
                        <h4 class="juduls3">Alamat Orang Tua/Wali</h4>
                        <div class="lines6"></div>
                        <div class="row row-cols-2 mt-3">
                            <div class="col">
                                <label for="alamatjalan" class="form-label">Alamat Jalan, Nomor/Dusun *</label>
                                <input type="text" class="form-control @error('Alamatjalan') is-invalid @enderror" name="Alamatjalan" value="{{ old('Alamatjalan', $form->data['step3']['Alamatjalan'] ?? '') }}" id="Alamatjalan" placeholder="Masukkan Alamat Lengkap">
                            </div>
                            <div class="col">
                                <label for="rt-rw-ortu" class="form-label">RT/RW *</label>
                                <input type="text" onkeyup="oneSlash(this)" class="form-control @error('rt-rwortu') is-invalid @enderror" value="{{ old('rt-rwortu', $form->data['step3']['rt-rwortu'] ?? '') }}" name="rt-rwortu" id="rt-rwortu" placeholder="Contoh : 12/2">
                            </div>
                            <div class="col pt-3">
                                <label for="kodepos-ortu" class="form-label">Kode Pos *</label>
                                <input type="number" class="form-control @error('Kodepos-ortu') is-invalid @enderror" name="Kodepos-ortu" value="{{ old('Kodepos-ortu', $form->data['step3']['Kodepos-ortu'] ?? '') }}" id="Kodepos-ortu" placeholder="Contoh : 75117">
                            </div>
                            <div class="col pt-3">
                                <label for="d-kelurahanortu" class="form-label">Desa/Kelurahan *</label>
                                <input type="text" class="form-control @error('d-kelurahanortu') is-invalid @enderror" value="{{ old('d-kelurahanortu', $form->data['step3']['d-kelurahanortu'] ?? '') }}" name="d-kelurahanortu" id="d-kelurahanortu" placeholder="Contoh : Karang Anyar">
                            </div>
                            <div class="col pt-3">
                                <label for="kecamatan-ortu" class="form-label">Kecamatan *</label>
                                <input type="text" class="form-control @error('Kecamatan-ortu') is-invalid @enderror" name="Kecamatan-ortu" value="{{ old('Kecamatan-ortu', $form->data['step3']['Kecamatan-ortu'] ?? '') }}" id="Kecamatan-ortu" placeholder="Contoh : Sungai Pinang">
                            </div>
                            <div class="col pt-3">
                                <label for="kabortu" class="form-label">Kabupaten/Kota *</label>
                                <input type="text" class="form-control @error('kabupatenortu') is-invalid @enderror" value="{{ old('kabupatenortu', $form->data['step3']['kabupatenortu'] ?? '') }}" name="kabupatenortu" id="kabupatenortu" placeholder="Contoh : Samarinda">
                            </div>
                            <div class="col pt-3">
                                <label for="provortu" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control @error('Provinsiortu') is-invalid @enderror" name="Provinsiortu" value="{{ old('Provinsiortu', $form->data['step3']['Provinsiortu'] ?? '') }}" id="Provinsiortu" placeholder="Contoh : Kalimantan Timur">
                            </div>
                            <div class="col pt-3">
                                <label for="nohportu" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control @error('nohportu') is-invalid @enderror" value="{{ old('nohportu', $form->data['step3']['nohportu'] ?? '') }}"  name="nohportu" id="nohportu" placeholder="Cohtoh : +628XXXXXXXXXXX">
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