<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SekolahAsal extends Model
{
    protected $table = 'sekolah_asal';
    protected $guarded = ['id'];

    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
