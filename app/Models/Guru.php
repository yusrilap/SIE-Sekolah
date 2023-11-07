<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = ['nip', 'nama', 'ekstrakulikuler_id', 'no_telp', 'alamat', 'foto'];

    public function ekstrakulikuler() {
        return $this->belongsTo(Ekstrakulikuler::class, 'ekstrakulikuler_id');
    }
}