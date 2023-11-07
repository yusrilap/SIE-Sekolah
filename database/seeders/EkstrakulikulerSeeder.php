<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Pramuka',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Paskibra',
            'jurusan_id' => 2,
        ]);
    }
}