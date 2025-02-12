<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    // protected $fillable = [
    //     'nama_prodi'
    // ];

    protected $guarded = [
        'id'
    ];

    public function pendaftar(): HasMany
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
