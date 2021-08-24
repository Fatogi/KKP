<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('agenda')->insert([
            'nama_agenda' => 'Perpanjangan data',
            'desc' => 'lowongan kerja',
            'tanggal' => '2021-03-03',
        ]);
    }
}
