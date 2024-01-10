<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'table_schedule';
    protected $fillable = ['user_id', 'tgl_masuk', 'ket_schedule'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}