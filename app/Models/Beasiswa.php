<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    // Letakkan di luar method, ini adalah properti class
    protected $fillable = ['nama', 'deskripsi', 'deadline', 'link', 'gambar', 'tingkats'];

    public function pendidikans()
    {
        return $this->belongsToMany(Pendidikan::class, 'beasiswa_pendidikan');
    }
}

