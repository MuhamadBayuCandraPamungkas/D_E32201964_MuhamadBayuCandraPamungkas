<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table pegawai
        DB::table('detail_profile')->insert([
        	'address' => 'Jember',
        	'nomor_tlp' => '082232832127',
        	'ttl' => '2002-02-28',
        	'foto' => 'picture.png'

        ]);
    }
}
