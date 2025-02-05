@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar1">
            <form action="post">
                <div class="sekolah">
                    <h4 class="juduls1">Identitas SMA/SMK Sederajat</h4>
                    <div class="lines1"></div>
                    <div class="idsekolah">
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="NamaS" class="form-label">Nama Sekolah *</label>
                                <input type="text" class="form-control" name="Namasekolah" id="Namasekolah" placeholder="Contoh : SMA Negeri 1 Samarinda">
                            </div>
                            <div class="col">
                                <label for="jupro" class="form-label">Jurusan Sekolah *</label>
                                <input type="text" class="form-control" name="JurusanSekolah" id="JurusanSekolah" placeholder="Contoh : IPA">
                            </div>
                            <div class="col pt-3">
                                <label for="tahunlulus" class="select-label">Tahun Lulus *</label>
                                <select class="form-select mt-2" aria-label="Tahun-Lulus" name="Tahunlulus">
                                    <option selected>Pilih Tahun Lulus</option>
                                    <option value="1">2025</option>
                                    <option value="2">2024</option>
                                    <option value="3">2023</option>
                                    <option value="4">2022</option>
                                    <option value="5">2021</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="alamatS" class="form-label">Alamat Sekolah *</label>
                                <input type="text" class="form-control" name="AlamatSekolah" id="AlamatSekolah" placeholder="Contoh : Jalan Piano">
                            </div>
                            <div class="col pt-3">
                                <label for="KabupatenKota" class="form-label">Kabupaten/Kota *</label>
                                <input type="text" class="form-control" name="KabupatenKota" id="KabupatenKota" placeholder="Contoh : Kabupaten Kutai Kartanegara">
                            </div>
                            <div class="col pt-3">
                                <label for="ProvinsiS" class="form-label">Provinsi *</label>
                                <input type="text" class="form-control" name="ProvinsiSekolah" id="ProvinsiSekolah" placeholder="Contoh : Kalimantan Timur">
                            </div>
                            <div class="col pt-3">
                                <label for="NegaraS" class="form-label">Negara *</label>
                                <input type="text" class="form-control" name="NegaraSekolah" id="NegaraSekolah" placeholder="Contoh : Indonesia">
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
                            <button type="submit" class="btn btn-primary"><a href="pendaftaran3" class="next">Next</a></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layoutform>