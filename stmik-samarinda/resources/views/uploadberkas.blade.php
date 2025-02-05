@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar3">
            <div class="programstudi text-center">
                <h4 class="judul5">Dokumen</h4>
            </div>
            <div class="line6"></div>
            <div class="uploadberkas">
                <div class="upload">
                    <div class="row cols-2">
                        <div class="col">
                            <label for="berkas1" class="form-label">Fotocopy Legalisir Ijazah SMA / Surat Keterangan Lulus</label>
                            <input class="form-control" type="file" id="berkas1" title="File harus berformat PDF">
                        </div>

                        <div class="col">
                            <label for="berkas2" class="form-label">Fotocopy Legalisir SKHU / Nilai UN</label>
                            <input class="form-control" type="file" id="berkas2" title="File harus berformat PDF">
                        </div>
                        <div class="mt-5"></div>

                        <div class="col">
                            <label for="berkas3" class="form-label">Fotocopy KK (Kartu Keluarga)</label>
                            <input class="form-control" type="file" id="berkas3" title="File harus berformat PDF">
                        </div>

                        <div class="col">
                            <label for="berkas4" class="form-label">Fotocopy KTP (Kartu Tanda Penduduk)</label>
                            <input class="form-control" type="file" id="berkas4" title="File harus berformat PDF">
                        </div>

                        <div class="mt-5"></div>

                        <div class="col">
                            <label for="berkas5" class="form-label">Pas Foto Warna latar merah (3x4)</label>
                            <input class="form-control" type="file" id="berkas5" title="File harus berformat jpg/png">
                        </div>

                        <div class="col">
                            <label for="berkas6" class="form-label">Bukti Pembayaran Pendaftaran</label>
                            <input class="form-control" type="file" id="berkas6" title="File harus berformat PDF">
                        </div>
                        <div class="mt-5"></div>

                        <div class="col">
                            <label for="berkas7" class="form-label">Surat Keterangan Kesehatan</label>
                            <input class="form-control" type="file" id="berkas7" title="File harus berformat PDF">
                        </div>

                        <div class="col">
                            <label for="berkas8" class="form-label">Surat Keterangan Bebas Narkoba</label>
                            <input class="form-control" type="file" id="berkas8" title="File harus berformat PDF">
                        </div>
                        <div class="mt-5"></div>
                        <div class="col align-self-start">
                            <label for="berkas9" class="form-label">Surat pernyataan</label>
                            <input class="form-control" type="file" id="berkas7" title="File harus berformat PDF">
                            <a href="#">Klik di sini untuk mengunduh surat pernyataan</a>
                        </div>

                        <div class="col">
                            
                        </div>

                    </div>

                    <div class="row mt-5">
                        
                        <div class="col text-end">
                            <button type="button" class="btn btn-secondary">Previous</button>
                            <button type="button" class="btn btn-primary">Next</button>
                            
                        </div>
                    </div>

                    

                </div>
            </div> 
        </div> 
    </div> 
</x-layoutform>
