@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar">
            <form action="post">
                <div class="programstudi">
                    <h4 class="judul1">Program Studi</h4>
                    <div class="line2"></div>
                    <div class="ps">
                        <div class="row">
                            <div class="col">
                                <label for="Ps" class="form-label">Program Studi *</label>
                                <input type="text" class="form-control" name="Programstudi" id="Ps" placeholder="Sistem Informasi (Sarjana)">
                            </div>
                            <div class="col">
                                <label for="Pilkelas" class="select-label">Pilihan Kelas *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-Kelas" name="Pilihankelas">
                                    <option selected>Masukkan Pilihan Kelas</option>
                                    <option value="1">Pagi (Offline)</option>
                                    <option value="2">Malam (Online)</option>
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
                                <input type="text" class="form-control" name="Namalengkap" id="NamaLengkap" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col">
                                <label for="NIK" class="form-label">NIK *</label>
                                <input type="number" class="form-control" name="NIK" id="nik" placeholder="Masukkan NIK anda">
                            </div>
                            <div class="col pt-3">
                                <label for="NPWP" class="form-label">NPWP *</label>
                                <input type="number" class="form-control" name="NPWP" id="npwp" placeholder="Masukkan NPWP anda">
                            </div>
                            <div class="col pt-3">
                                <label for="NISN" class="form-label">NISN *</label>
                                <input type="text" class="form-control" name="NISN" id="nisn" placeholder="Masukkan NISN anda">
                            </div>
                            <div class="col pt-3">
                                <label for="Piljk" class="select-label">Jenis Kelamin *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-jk" name='pilihanjk'>
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="Tl" class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control" name="Tempatlahir" id="tempatlahir" placeholder="Kota Asal">
                            </div>
                            <div class="col pt-3">
                                <label for="tglahir" class="form-label">Tanggal Lahir *</label>
                                <input type="date" class="form-control" name="Tanggallahir" id="tanggallahir" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="col pt-3">
                                <label for="bb-tb" class="form-label">Berat/Tinggi Badan *</label>
                                <input type="text" class="form-control" name="berat-tinggibadan" id="b-tb" placeholder="Contoh: 70kg/170cm">
                            </div>
                            <div class="col pt-3">
                                <label for="Pilagama" class="select-label">Agama *</label>
                                <select class="form-select mt-2" aria-label="Pilihan-Agama" name="Pilihanagama">
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
                                <label for="Pilstatpernikahan" class="select-label">Status Pernikahan</label>
                                <select class="form-select mt-2" aria-label="Pilihan-pernikahan" name="Pilihanpernikahan">
                                    <option selected>Status Pernikahan</option>
                                    <option value="1">Belum Menikah</option>
                                    <option value="2">Sudah Menikah</option>
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
                                <input type="text" class="form-control" name="tinggalbersama" id="tglbersama" placeholder="Contoh: Orang Tua">
                            </div>
                            <div class="col">
                                <label for="alamat1" class="form-label">Alamat *</label>
                                <input type="text" class="form-control" name="Alamat" id="alamat1" placeholder="Contoh: Jalan Piano">
                            </div>
                            <div class="col pt-3">
                                <label for="codepos" class="form-label">Kode Pos *</label>
                                <input type="number" class="form-control" name="Kodepos" id="Kodepos" placeholder="Contoh: 75100">
                            </div>
                            <div class="col pt-3">
                                <label for="rt-rw" class="form-label">RT/RW *</label>
                                <input type="text" class="form-control" name="RT-RW" id="rt-rw1" placeholder="Contoh: 1/10">
                            </div>
                            <div class="col pt-3">
                                <label for="desa-k" class="form-label">Desa/Kelurahan *</label>
                                <input type="text" class="form-control" name="d-kelurahan" id="d-keluharan" placeholder="Contoh: Kelurahan Air Hitam">
                            </div>
                            <div class="col pt-3">
                                <label for="kec" class="form-label">Kecamatan *</label>
                                <input type="text" class="form-control" name="Kecamatan" id="Kecamatan" placeholder="Contoh: Kecamatan Samarinda Ulu">
                            </div>
                            <div class="col pt-3">
                                <label for="kab" class="form-label">Kabupaten *</label>
                                <input type="text" class="form-control" name="Kabupaten" id="Kabupaten" placeholder="Contoh: Kabupaten Kurtai Kartanegara">
                            </div>
                            <div class="col pt-3">
                                <label for="prov" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control" name="Provinsi" id="Provinsi" placeholder="Contoh: Kalimantan Timur">
                            </div>
                            <div class="col pt-3">
                                <label for="neg" class="form-label">Negara *</label>
                                <input type="text" class="form-control" name="Negara" id="Negara" placeholder="Contoh: Indonesia">
                            </div>
                            <div class="col pt-3">
                                <label for="notelp" class="form-label">Handphone/Telp.Rumah *</label>
                                <input type="number" class="form-control" name="notelp-hp" id="notelp-hp" placeholder="Contoh: 08XXXXXXXXXX">
                            </div>
                            <div class="col pt-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" name="Email" id="Email" placeholder="Contoh: user@gmail.com (aktif)">
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
                            <a href="#" class="btn btn-secondary">Previous</a>
                            <button type="submit" class="btn btn-primary"><a href="pendaftaran2" class="next">Next</a></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layoutform>