<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    public $ket_schedule = [
        'Pagi(08:00-12:00)',
        'Sore(14:00-16:00)',
        'Siang(12:00-14:00)'
    ];


    public $attendance = [
        'Hadir','Permision','Sick','Alpha'
    ];
}