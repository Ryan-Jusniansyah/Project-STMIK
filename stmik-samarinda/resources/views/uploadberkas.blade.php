@section('title', $title)
<x-layoutform>
    <div class="container-fluid">
        <div class="borderLuar3">
            <div class="programstudi text-center">
                <h4 class="judul5">Dokumen</h4>
            </div>
            <div class="line6"></div>
            <form action="" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="uploadberkas">
                    <div class="upload">
                        <div class="row cols-2">
                            <div class="col">
                                <label for="berkas1" class="form-label">Fotocopy Legalisir Ijazah SMA / Surat Keterangan Lulus</label>
                                <input class="form-control @error('IjazahSMA') is-invalid @enderror" type="file" name="IjazahSMA" id="berkas1" title="File harus berformat PDF" accept="application/pdf">
                            </div>
    
                            <div class="col">
                                <label for="berkas2" class="form-label">Fotocopy Legalisir SKHU / Nilai UN</label>
                                <input class="form-control @error('SKHU') is-invalid @enderror" type="file" name="SKHU" id="berkas2" title="File harus berformat PDF" accept="application/pdf">
                            </div>
                            <div class="mt-5"></div>
    
                            <div class="col">
                                <label for="berkas3" class="form-label">Fotocopy KK (Kartu Keluarga)</label>
                                <input class="form-control @error('FotocopyKK') is-invalid @enderror" type="file" name="FotocopyKK" id="berkas3" title="File harus berformat PDF" accept="application/pdf">
                            </div>
    
                            <div class="col">
                                <label for="berkas4" class="form-label">Fotocopy KTP (Kartu Tanda Penduduk)</label>
                                <input class="form-control @error('FotocopyKTP') is-invalid @enderror" type="file" name="FotocopyKTP" id="berkas4" title="File harus berformat PDF" accept="application/pdf">
                            </div>
    
                            <div class="mt-5"></div>
    
                            <div class="col">
                                <label for="berkas5" class="form-label">Pas Foto Warna latar merah (3x4)</label>
                                <input class="form-control @error('PasFoto') is-invalid @enderror" type="file" name="PasFoto" id="berkas5" title="File harus berformat jpg/png" accept="image/png, image/jpeg, image/jpg">
                            </div>
    
                            <div class="col">
                                <label for="berkas6" class="form-label">Bukti Pembayaran Pendaftaran</label>
                                <input class="form-control @error('BuktiPembayaran') is-invalid @enderror" type="file" name="BuktiPembayaran" id="berkas6" title="File harus berformat PDF" accept="application/pdf">
                            </div>
                            <div class="mt-5"></div>
    
                            <div class="col">
                                <label for="berkas7" class="form-label">Surat Keterangan Kesehatan</label>
                                <input class="form-control @error('SuratKetSehat') is-invalid @enderror" type="file" name="SuratKetSehat" id="berkas7" title="File harus berformat PDF" accept="application/pdf">
                            </div>
                            
                            <div class="col">
                                <label for="berkas8" class="form-label">Surat Keterangan Bebas Narkoba</label>
                                <input class="form-control @error('SuratKetBebasNarkoba') is-invalid @enderror" type="file" name="SuratKetBebasNarkoba" id="berkas8" title="File harus berformat PDF" accept="application/pdf">
                            </div>
                            <div class="mt-5"></div>
                            <div class="col align-self-start">
                                <label for="berkas9" class="form-label">Surat pernyataan</label>
                                <input class="form-control @error('SuratPernyataan') is-invalid @enderror" type="file" name="SuratPernyataan" id="berkas7" title="File harus berformat PDF" accept="application/pdf">
                                <a href="https://docs.google.com/document/d/1ORfPR6xtVeKjaOxyTIC_723aB710BKn5/edit?usp=sharing&ouid=101954172151456179245&rtpof=true&sd=true" target="_blank">Klik di sini untuk mengunduh surat pernyataan</a>
                            </div>
    
                            <div class="col">
                                
                            </div>
    
                        </div>
    
                        <div class="row mt-5">
                            
                            <div class="col text-end">
                                <button type="button" class="btn btn-secondary">Previous</button>
                                <button type="submit" class="btn btn-warning text-white">Next</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
        </div> 
    </div> 
</x-layoutform>
