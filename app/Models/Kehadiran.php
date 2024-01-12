<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $fillable = ['kelas_id', 'ekstrakulikuler_id', 'hari', 'dari_jam', 'sampai_jam'];

    public function ekstrakulikuler()
    {
        return $this->belongsTo(Ekstrakulikuler::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}