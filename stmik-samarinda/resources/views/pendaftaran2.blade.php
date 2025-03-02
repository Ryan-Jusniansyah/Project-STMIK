@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar1">
            <form action="" method="POST">
                @csrf
                <div class="sekolah">
                    <h4 class="juduls1">Identitas SMA/SMK Sederajat</h4>
                    <div class="lines1"></div>
                    <div class="idsekolah">
                        <div class="row row-cols-2">
                            <div class="col">
                                <label for="NamaS" class="form-label">Nama Sekolah *</label>
                                <input type="text" value="{{ old('Namasekolah', $form->data['step2']['Namasekolah'] ?? '') }}" class="form-control  @error('Namasekolah') is-invalid @enderror" name="Namasekolah" id="Namasekolah" placeholder="Contoh : SMA Negeri 1 Samarinda">
                            </div>
                            <div class="col">
                                <label for="jupro" class="form-label">Jurusan Sekolah *</label>
                                <input type="text" value="{{ old('JurusanSekolah', $form->data['step2']['JurusanSekolah'] ?? '') }}" class="form-control  @error('JurusanSekolah') is-invalid @enderror" name="JurusanSekolah" id="JurusanSekolah" placeholder="Contoh : IPA">
                            </div>
                            <div class="col pt-3">
                                <label for="tahunlulus" class="select-label">Tahun Lulus *</label>
                                <select class="form-select mt-2 @error('Tahunlulus') is-invalid @enderror" aria-label="Tahun-Lulus" name="Tahunlulus">
                                    <option selected disabled>Pilih Tahun Lulus</option>
                                    <option {{ old('Tahunlulus', $form->data['step2']['Tahunlulus'] ?? '') == '2025' ? 'selected' : '' }} value="2025">2025</option>
                                    <option {{ old('Tahunlulus', $form->data['step2']['Tahunlulus'] ?? '') == '2024' ? 'selected' : '' }} value="2024">2024</option>
                                    <option {{ old('Tahunlulus', $form->data['step2']['Tahunlulus'] ?? '') == '2023' ? 'selected' : '' }} value="2023">2023</option>
                                    <option {{ old('Tahunlulus', $form->data['step2']['Tahunlulus'] ?? '') == '2022' ? 'selected' : '' }} value="2022">2022</option>
                                    <option {{ old('Tahunlulus', $form->data['step2']['Tahunlulus'] ?? '') == '2021' ? 'selected' : '' }} value="2021">2021</option>
                                </select>
                            </div>
                            <div class="col pt-3">
                                <label for="alamatS" class="form-label">Alamat Sekolah *</label>
                                <input type="text" value="{{ old('AlamatSekolah', $form->data['step2']['AlamatSekolah'] ?? '') }}" class="form-control  @error('AlamatSekolah') is-invalid @enderror" name="AlamatSekolah" id="AlamatSekolah" placeholder="Contoh : Jalan Piano">
                            </div>
                            <div class="col pt-3">
                                <label for="KabupatenKota" class="form-label">Kabupaten/Kota *</label>
                                <input type="text" value="{{ old('KabupatenKota', $form->data['step2']['KabupatenKota'] ?? '') }}" class="form-control  @error('KabupatenKota') is-invalid @enderror" name="KabupatenKota" id="KabupatenKota" placeholder="Contoh : Kabupaten Kutai Kartanegara">
                            </div>
                            <div class="col pt-3">
                                <label for="ProvinsiS" class="form-label">Provinsi *</label>
                                <input type="text" value="{{ old('ProvinsiSekolah', $form->data['step2']['ProvinsiSekolah'] ?? '') }}" class="form-control  @error('ProvinsiSekolah') is-invalid @enderror" name="ProvinsiSekolah" id="ProvinsiSekolah" placeholder="Contoh : Kalimantan Timur">
                            </div>
                            <div class="col pt-3">
                                <label for="NegaraS" class="form-label">Negara *</label>
                                <input type="text" value="{{ old('NegaraSekolah', $form->data['step2']['NegaraSekolah'] ?? '') }}" class="form-control  @error('NegaraSekolah') is-invalid @enderror" name="NegaraSekolah" id="NegaraSekolah" placeholder="Contoh : Indonesia">
                            </div>
                        </div>
                    </div>
                    <h6 class="ket">Keterangan:</h6>
                    <p class="wajib">(*) Wajib diisi</p>
                </div>
                <div class="simpan">
                    <div class="row justify-content-end me-5 mt-5">
                        <div class="col-3">
                            <a href="pendaftaran1" class="btn btn-secondary">Previous</a>
                            <button type="submit" class="btn btn-warning text-white">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layoutform>