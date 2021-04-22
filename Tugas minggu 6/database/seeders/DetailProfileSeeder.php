<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table pegawai

        DB::table('detail_profile')->insert([
            'address' => 'Situbondo',
            'nomor_tlp' => '082311158345',
            'ttl' => '2002-12-28',
            'foto' => 'picture.png',
        ]);
    }
}
