<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Kevin Hartanto',
            'nis' => '1234543201',
            'kelas_id' => 1,
            'telp' => '081234567890',
        ]);

        DB::table('siswas')->insert([
            'nama' => 'Siska Saraswati',
            'nis' => '1234543202',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Alexandra',
            'nis' => '1234543203',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Alison',
            'nis' => '1234543204',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Bernadette',
            'nis' => '1234543205',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Claire',
            'nis' => '1234543206',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Emma',
            'nis' => '1234543207',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Gabrielle',
            'nis' => '1234543208',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Bernadette',
            'nis' => '1234543209',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
        DB::table('siswas')->insert([
            'nama' => 'Bernadette',
            'nis' => '12345432010',
            'kelas_id' => 2,
            'telp' => '089876543210',
        ]);
    }
}