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
                <td>:</td>
                <td>{{ $pendaftaran->Programstudi }}</td>
            </tr>
            <tr>
                <td>Pilihan Kelas</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Identitas Peserta</th>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td></td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td></td>
            </tr>
            <tr>
                <td>Berat/Tinggi Badan</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td></td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td></td>
            </tr>
            <tr>
                <td>Status Menikah</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Alamat Lengkap Peserta</th>
            </tr>
            <tr>
                <td>Tinggal Bersama</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td></td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td></td>
            </tr>
            <tr>
                <td>RT/RW</td>
                <td></td>
            </tr>
            <tr>
                <td>Desa/Kelurahan</td>
                <td></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td></td>
            </tr>
            <tr>
                <td>Negara</td>
                <td></td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah</td>
                <td></td>
            </tr>
            <tr>
                <td>Email</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Detail Pekerjaan (Jika Sudah Bekerja)</th>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat Perusahaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Nomor Telp Perusahaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Jabatan Saat Ini</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Identitas SMA/SMK Sederajat</th>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td></td>
            </tr>
            <tr>
                <td>Jurusan Program</td>
                <td></td>
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td></td>
            </tr>
            <tr>
                <td>Alamat Sekolah</td>
                <td></td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td></td>
            </tr>
            <tr>
                <td>Negara</td>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Identitas Orang Tua/Wali</th>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Penghasilan Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Status Kehidupan Ayah</td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>NIK Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Penghasilan Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Status Kehidupan Ibu</td>
                <td></td>
            </tr>
            <tr>
                <td>Nama Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>NIK Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>Agama Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>Pekerjaan Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>Penghasilan Wali</td>
                <td></td>
            </tr>
            <tr>
                <td>Handphone/Telp Rumah Wali</td>
                <td></td>
            </tr>
        </table>
    </div>
</body>

</html>