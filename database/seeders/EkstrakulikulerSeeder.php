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
            'nama_ekstrakulikuler' => 'Bahasa Korea',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Basket',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Bulu Tangkis',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'English Club',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Futsal',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Jurnalistik',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Musik',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Paskibra',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'PMR',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Pramuka',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Rohis',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Silat',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Seni Tari',
            'jurusan_id' => 2,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Teater',
            'jurusan_id' => 1,
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Volly',
            'jurusan_id' => 2,
        ]);
    }
}