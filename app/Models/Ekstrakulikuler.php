<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    use HasFactory;

    protected $fillable = ['nama_ekstrakulikuler'];

    // public function jurusan()
    // {
    //     return $this->belongsTo(Jurusan::class);
    // }
}