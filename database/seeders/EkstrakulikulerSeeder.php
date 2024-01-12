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
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Basket',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Bulu Tangkis',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'English Club',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Futsal',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Jurnalistik',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Musik',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Paskibra',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'PMR',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Pramuka',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Rohis',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Silat',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Seni Tari',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Teater',
        ]);

        DB::table('ekstrakulikulers')->insert([
            'nama_ekstrakulikuler' => 'Volly',
        ]);
    }
}