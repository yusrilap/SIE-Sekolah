<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class Absensi extends Model
{
    protected $table = 'table_absensi';
    protected $fillable = ['schedule_id', 'attendance_id', 'tanggal_absen', 'waktu_masuk', 'waktu_keluar'];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }
}