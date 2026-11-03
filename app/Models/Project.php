<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    'nama',
    'slug',
    'kategori',
    'deskripsi',
    'gambar',
    'link',
    'status',
    ];
}
