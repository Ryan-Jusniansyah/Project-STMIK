<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Mahasiswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td,
        th {
            border: 1px solid #000;
            padding: 8px;
        }

        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title">BIODATA MAHASISWA BARU</h2>
        <table>
            <tr>
                <td>Program Studi</td>
                <td>{{ $pendaftaran->Programstudi }}</td>
            </tr>
            <tr>
                <td>Pilihan Kelas</td>
                <td>{{ $pendaftaran->Pilihankelas }}</td>
            </tr>
            <tr>
                <th colspan="2">Identitas Peserta</th>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>{{ $pendaftaran->Namalengkap }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>{{ $pendaftaran->NIK }}</td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>{{ $pendaftaran->NISN }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>{{ $pendaftaran->pilihanjk }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>{{ $pendaftaran->Tempatlahir . "," . $pendaftaran->Tanggallahir  }}</td>
            </tr>
            <tr>
                <td>Ukuran Baju</td>
                <td>{{ $pendaftaran->Ukuranbaju }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>{{ $pendaftaran->Pilihanagama }}</td>
            </tr>
            <tr>
                <td>Status Menikah</td>
                <td>{{ $pendaftaran->Pilihanpernikahan }}</td>
            </tr>
            <tr>
                <th colspan="2">Alamat Lengkap Peserta</th>
            </tr>
            <tr>
                <td>Tinggal Bersama</td>
                <td>{{ $pendaftaran->tinggalbersama }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{ $pendaftaran->Alamat }}</td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td>{{ $pendaftaran->Kodepos }}</td>
            </tr>
            <tr>
                <td>RT/RW</td>
                <td>{{ $pendaftaran->RT_RW }}</td>
            </tr>
            <tr>
                <td>Desa/Kelurahan</td>
                <td>{{ $pendaftaran->d_kelurahan }}</td>
            </tr>
            <tr>
                <td>Kecamatan/Kota</td>
                <td>{{ $pendaftaran->Kecamatan }}</td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>{{ $pendaftaran->Kabupaten }}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>{{ $pendaftaran->Provinsi }}</td>
            </tr>
            <tr>
                <td>Negara</td>
                <td>{{ $pendaftaran->Negara }}</td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah</td>
                <td>{{ $pendaftaran->notelp_hp }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $pendaftaran->Email }}</td>
            </tr>
            <tr>
                <th colspan="2">Detail Pekerjaan (Jika Sudah Bekerja)</th>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td>{{ $pendaftaran->Namaperu }}</td>
            </tr>
            <tr>
                <td>Alamat Perusahaan</td>
                <td>{{ $pendaftaran->Alamatperu }}</td>
            </tr>
            <tr>
                <td>Nomor Telp Perusahaan</td>
                <td>{{ $pendaftaran->Telp_perusahaan }}</td>
            </tr>
            <tr>
                <td>Jabatan Saat Ini</td>
                <td>{{ $pendaftaran->Jabatan }}</td>
            </tr>
            <tr>
                <th colspan="2">Identitas SMA/SMK Sederajat</th>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td>{{ $pendaftaran->Namasekolah }}</td>
            </tr>
            <tr>
                <td>Jurusan Program</td>
                <td>{{ $pendaftaran->JurusanSekolah }}</td>
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td>{{ $pendaftaran->Tahunlulus }}</td>
            </tr>
            <tr>
                <td>Alamat Sekolah</td>
                <td>{{ $pendaftaran->AlamatSekolah }}</td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>{{ $pendaftaran->KabupatenKota }}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>{{ $pendaftaran->ProvinsiSekolah }}</td>
            </tr>
            <tr>
                <td>Negara</td>
                <td>{{ $pendaftaran->NegaraSekolah }}</td>
            </tr>
            <tr>
                <th colspan="2">Identitas Orang Tua/Wali</th>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>{{ $pendaftaran->NamaAyah }}</td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td>{{ $pendaftaran->NIKayah }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir Ayah</td>
                <td>{{ $pendaftaran->Tempatlayah . "," . $pendaftaran->tgllayah }}</td>
            </tr>
            <tr>
                <td>Agama Ayah</td>
                <td>{{ $pendaftaran->PilihanagamaA }}</td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah</td>
                <td>{{ $pendaftaran->PilihanpendtA }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>{{ $pendaftaran->PilihanpekerA }}</td>
            </tr>
            <tr>
                <td>Penghasilan Ayah</td>
                <td>{{ $pendaftaran->PilihanpenghasilanA }}</td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah Ayah</td>
                <td>{{ $pendaftaran->nohpayah }}</td>
            </tr>
            <tr>
                <td>Status Kehidupan Ayah</td>
                <td>{{ $pendaftaran->PilihanstatA }}</td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>{{ $pendaftaran->NamaIbu }}</td>
            </tr>
            <tr>
                <td>NIK Ibu</td>
                <td>{{ $pendaftaran->NIKibu }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir Ibu</td>
                <td>{{ $pendaftaran->Tempatlibu . "," . $pendaftaran->tgllibu}}</td>
            </tr>
            <tr>
                <td>Agama Ibu</td>
                <td>{{ $pendaftaran->PilihanagamaI }}</td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu</td>
                <td>{{ $pendaftaran->PilihanpendtI }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>{{ $pendaftaran->PilihanpekerI }}</td>
            </tr>
            <tr>
                <td>Penghasilan Ibu</td>
                <td>{{ $pendaftaran->PilihanpenghasilanI }}</td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah Ibu</td>
                <td>{{ $pendaftaran->nohpibu }}</td>
            </tr>
            <tr>
                <td>Status Kehidupan Ibu</td>
                <td>{{ $pendaftaran->PilihanstatI }}</td>
            </tr>
            <tr>
                <td>Nama Wali</td>
                <td>{{ $pendaftaran->NamaWali }}</td>
            </tr>
            <tr>
                <td>NIK Wali</td>
                <td>{{ $pendaftaran->NIKWali }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir Wali</td>
                <td>{{ $pendaftaran->Tempatlwali . "," . $pendaftaran->tgllwali }}</td>
            </tr>
            <tr>
                <td>Agama Wali</td>
                <td>{{ $pendaftaran->PilihanagamaW }}</td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Wali</td>
                <td>{{ $pendaftaran->PilihanpendtW }}</td>
            </tr>
            <tr>
                <td>Pekerjaan Wali</td>
                <td>{{ $pendaftaran->PilihanpekerW }}</td>
            </tr>
            <tr>
                <td>Penghasilan Wali</td>
                <td>{{ $pendaftaran->PilihanpenghasilanW }}</td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah Wali</td>
                <td>{{ $pendaftaran->nohpwali }}</td>
            </tr>
        </table>
    </div>
</body>

</html>