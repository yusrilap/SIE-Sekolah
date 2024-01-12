<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama_kelas' => 'X ATU 1',
            'guru_id' => 1,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X TKJ 1',
            'guru_id' => 2,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X ATPH 1',
            'guru_id' => 3,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X APHP 1',
            'guru_id' => 4,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X APL 1',
            'guru_id' => 5,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X GRAFIKA 2',
            'guru_id' => 6,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X APHP 1',
            'guru_id' => 4,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X APL 1',
            'guru_id' => 5,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X ATPH 1',
            'guru_id' => 3,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X APL 1',
            'guru_id' => 5,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X ATPH 1',
            'guru_id' => 3,
        ]);

        DB::table('kelas')->insert([
            'nama_kelas' => 'X GRAFIKA 1',
            'guru_id' => 6,
        ]);
    }
}