<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'ekstrakulikuler_id', 'kelas_id', 'hari', 'dari_jam', 'sampai_jam'
    ];

    public function ekstrakulikuler()
    {
        return $this->belongsTo(Ekstrakulikuler::class, 'ekstrakulikuler_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}