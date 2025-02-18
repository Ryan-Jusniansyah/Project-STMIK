<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berkas extends Model
{
    protected $table = 'berkas_pendaftaran';
    protected $guarded = [];

    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
