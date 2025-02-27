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
                                <input type="text" class="form-control" name="NamaAyah" id="NamaAyah" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikA" class="form-label">NIK *</label>
                                <input type="number" class="form-control" name="NIKayah" id="NIKayah" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatA" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control" name="Tempatlayah" id="Tempatlayah" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllA" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control" name="tgllayah" id="tgllayah" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaA" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaA" name="PilihanagamaA">
                                    <option selected>Pilih Agama Anda</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtA" class="select-label">Pendidikan Terakhir *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtA" name="PilihanpendtA">
                                    <option selected>Pilih Pendidikan Terakhir</option>
                                    <option value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerA" class="select-label">Pekerjaan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerA" name="PilihanpekerA">
                                    <option selected>Pilih Pekerjaan Orang Tua</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanA" class="select-label">Penghasilan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanA" name="PilihanpenghasilanA">
                                    <option selected>Pilih Penghasilan</option>
                                    <option value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpA" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control" name="nohpayah" id="nohpayah" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statA" class="select-label">Status Kehidupan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-statA" name="PilihanstatA">
                                    <option selected>Pilih Status Kehidupan</option>
                                    <option value="Hidup">Hidup</option>
                                    <option value="Meninggal">Meninggal</option>
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
                                <input type="text" class="form-control" name="NamaIbu" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK *</label>
                                <input type="number" class="form-control" name="NIKibu" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control" name="Tempatlibu" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control" name="tgllibu" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaI" name="PilihanagamaI">
                                    <option selected>Pilih Agama Anda</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtI" name="PilihanpendtI">
                                    <option selected>Pilih Pendidikan Terakhir</option>
                                    <option value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerI" name="PilihanpekerI">
                                    <option selected>Pilih Pekerjaan Orang Tua</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanI">
                                    <option selected>Pilih Penghasilan</option>
                                    <option value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah</label>
                                <input type="number" class="form-control" name="nohpibu" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                            <div class="col pt-3">
                                <label for="statI" class="select-label">Status Kehidupan *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-statI" name="PilihanstatI">
                                    <option selected>Pilih Status Kehidupan</option>
                                    <option value="Hidup">Hidup</option>
                                    <option value="Meninggal">Meninggal</option>
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
                                <input type="text" class="form-control" name="NamaWali" id="NamaIbu" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="nikI" class="form-label">NIK</label>
                                <input type="number" class="form-control" name="NIKWali" id="NIKibu" placeholder="Contoh : 64XXXXXXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="TempatI" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="Tempatlwali" id="Tempatlibu" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tgllI" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgllwali" id="tgllibu" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="agamaI" class="select-label">Agama</label>
                                <select class="form-select mt-2" aria-label="Pilihan-agamaI" name="PilihanagamaW">
                                    <option selected>Pilih Agama Anda</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pendtI" class="select-label">Pendidikan Terakhir</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pendtI" name="PilihanpendtW">
                                    <option selected>Pilih Pendidikan Terakhir</option>
                                    <option value="Pascasarjana (S2/S3)">Pascasarjana (S2/S3)</option>
                                    <option value="Sarjana (S1)">Sarjana (S1)</option>
                                    <option value="Diploma (D1/D2/D3/D4)">Diploma (D1/D2/D3/D4)</option>
                                    <option value="SMA/SMK Sederajat">SMA/SMK Sederajat</option>
                                    <option value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option value="SD atau sederajat">SD atau sederajat</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="pekerI" class="select-label">Pekerjaan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pekerI" name="PilihanpekerW">
                                    <option selected>Pilih Pekerjaan Orang Tua</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Petani/peternak/nelayan">Petani/peternak/nelayan</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="penghasilanI" class="select-label">Penghasilan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-penghasilanI" name="PilihanpenghasilanW">
                                    <option selected>Pilih Penghasilan</option>
                                    <option value="Kurang dari Rp1.000.000">Kurang dari Rp1.000.000</option>
                                    <option value="Rp1.000.000 - Rp3.000.000">Rp1.000.000 - Rp3.000.000</option>
                                    <option value="Rp3.000.000 - Rp5.000.000">Rp3.000.000 - Rp5.000.000</option>
                                    <option value="Rp.5.000.000 - Rp10.000.000">Rp.5.000.000 - Rp10.000.000</option>
                                    <option value="Rp10.000.000 - Rp20.000.000">Rp10.000.000 - Rp20.000.000</option>
                                    <option value="Lebih dari Rp20.000.000">Lebih dari Rp20.000.000</option>
                                    <option value="Tidak berpenghasilan">Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="col-md pt-3">
                                <label for="nohpI" class="form-label">Handphone/Telp.Rumah</label>
                                <input type="number" class="form-control" name="nohpwali" id="nohpibu" placeholder="Contoh : +6280000000000">
                            </div>
                        </div>
                    </div>
                    <div class="alamatortu">
                        <h4 class="juduls3">Alamat Orang Tua/Wali</h4>
                        <div class="lines6"></div>
                        <div class="row row-cols-2 mt-3">
                            <div class="col">
                                <label for="alamatjalan" class="form-label">Alamat Jalan, Nomor/Dusun *</label>
                                <input type="text" class="form-control" name="Alamatjalan" id="Alamatjalan" placeholder="Masukkan Alamat Lengkap">
                            </div>
                            <div class="col">
                                <label for="rt-rw-ortu" class="form-label">RT/RW *</label>
                                <input type="text" class="form-control" name="rt-rwortu" id="rt-rwortu" placeholder="Contoh : 12/2">
                            </div>
                            <div class="col pt-3">
                                <label for="kodepos-ortu" class="form-label">Kode Pos *</label>
                                <input type="number" class="form-control" name="Kodepos-ortu" id="Kodepos-ortu" placeholder="Contoh : 75117">
                            </div>
                            <div class="col pt-3">
                                <label for="d-kelurahanortu" class="form-label">Desa/Kelurahan *</label>
                                <input type="text" class="form-control" name="d-kelurahanortu" id="d-kelurahanortu" placeholder="Contoh : Karang Anyar">
                            </div>
                            <div class="col pt-3">
                                <label for="kecamatan-ortu" class="form-label">Kecamatan *</label>
                                <input type="text" class="form-control" name="Kecamatan-ortu" id="Kecamatan-ortu" placeholder="Contoh : Sungai Pinang">
                            </div>
                            <div class="col pt-3">
                                <label for="kabortu" class="form-label">Kabupaten/Kota *</label>
                                <input type="text" class="form-control" name="kabupatenortu" id="kabupatenortu" placeholder="Contoh : Samarinda">
                            </div>
                            <div class="col pt-3">
                                <label for="provortu" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control" name="Provinsiortu" id="Provinsiortu" placeholder="Contoh : Kalimantan Timur">
                            </div>
                            <div class="col pt-3">
                                <label for="nohportu" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control"  name="nohportu" id="nohportu" placeholder="Cohtoh : +628XXXXXXXXXXX">
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
</x-layoutform>