<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function kontens()
    {
        return $this->hasMany(Konten::class);
    }

    public function lampirans()
    {
        return $this->hasMany(Lampiran::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
