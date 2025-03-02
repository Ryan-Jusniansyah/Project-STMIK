<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TemporaryForm extends Model
{
    protected $fillable = ['id', 'data'];
    protected $casts = ['data' => 'array'];
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Generate UUID otomatis
        });
    }
}
