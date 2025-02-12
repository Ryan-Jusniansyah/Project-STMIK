<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrangTua extends Model
{
    protected $guarded = [];

    public function pendaftar(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
