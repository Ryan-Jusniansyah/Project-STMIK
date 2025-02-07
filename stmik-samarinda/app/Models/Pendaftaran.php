<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pendaftaran extends Model
{
    // protected $fillable = [
    //     'nama_lengkap', 'nik', 'npwp', 'nisn', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'berat_badan', 'tinggi_badan', 'agama', 'menikah', 'tinggal_bersama', 'alamat', 'kode_pos', 'rt', 'rw', 'kelurahan', 'kecamatan', 'kabupaten', 'provinsi', 'negara', 'nomor_telepon', 'email'
    // ];

    protected $table = 'pendaftaran';

    protected $guarded = [
        'id'
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function sekolahasal(): HasOne
    {
        return $this->hasOne(SekolahAsal::class);
    }

    public function orangtua(): HasOne
    {
        return $this->hasOne(OrangTua::class);
    }
}
