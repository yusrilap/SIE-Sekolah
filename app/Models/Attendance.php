<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'table_attendance';
    protected $fillable = ['name', 'value'];
}