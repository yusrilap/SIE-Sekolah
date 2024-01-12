<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nama' => 'Budi Santoso',
            'nip' => '20240101001',
            'ekstrakulikuler_id' => 1,
            'no_telp' => '081234567890',
            'alamat' => 'Jl. Budi Santoso',
        ]);

        DB::table('gurus')->insert([
            'nama' => 'Gunawan Efendi',
            'nip' => '20240101002',
            'ekstrakulikuler_id' => 2,
            'no_telp' => '089876543210',
            'alamat' => 'Jl. Gunawan Efendi',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Joanne',
            'nip' => '20240101003',
            'ekstrakulikuler_id' => 3,
            'no_telp' => '08987654345',
            'alamat' => 'Jl. Siliwangi',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Julia',
            'nip' => '20240101004',
            'ekstrakulikuler_id' => 4,
            'no_telp' => '0898765423423',
            'alamat' => 'Jl. Gatot Subroto',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Karen',
            'nip' => '20240101005',
            'ekstrakulikuler_id' => 5,
            'no_telp' => '0823482423341',
            'alamat' => 'Jl. Herman',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Lily',
            'nip' => '20240101006',
            'ekstrakulikuler_id' => 6,
            'no_telp' => '089163492153',
            'alamat' => 'Jl. Bentardulu',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Lisa',
            'nip' => '20240101007',
            'ekstrakulikuler_id' => 7,
            'no_telp' => '088213476134',
            'alamat' => 'Jl. Suswanto',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Mendeley',
            'nip' => '20240101008',
            'ekstrakulikuler_id' => 8,
            'no_telp' => '0872374861341',
            'alamat' => 'Jl. Bungamekar',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Rachel',
            'nip' => '20240101010',
            'ekstrakulikuler_id' => 9,
            'no_telp' => '0892349324237',
            'alamat' => 'Jl. Tutolati',
        ]);

         DB::table('gurus')->insert([
            'nama' => 'Rebecca',
            'nip' => '20240101011',
            'ekstrakulikuler_id' => 10,
            'no_telp' => '082347619834',
            'alamat' => 'Jl. Sariwangi',
        ]);
    }
}