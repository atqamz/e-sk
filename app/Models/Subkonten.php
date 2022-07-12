<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkonten extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function konten()
    {
        return $this->belongsTo(Konten::class);
    }
}
