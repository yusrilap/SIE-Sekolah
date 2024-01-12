<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->insert([
            'nama_jurusan' => 'APHP',
        ]);

        DB::table('jurusans')->insert([
            'nama_jurusan' => 'ATPH',
        ]);

        DB::table('jurusans')->insert([
            'nama_jurusan' => 'ATU',
        ]);

        DB::table('jurusans')->insert([
            'nama_jurusan' => 'TKJ',
        ]);

        DB::table('jurusans')->insert([
            'nama_jurusan' => 'APL',
        ]);

        DB::table('jurusans')->insert([
            'nama_jurusan' => 'GRAFIKA',
        ]);
    }
}