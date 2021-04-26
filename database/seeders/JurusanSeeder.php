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
        $jurusan = [
            [
                'nama' => 'D4 Teknologi Rekayasa Perangkat Lunak (TRPL)',
            ],
            [
                'nama' => 'D4 Teknologi Rekayasa Internet (TRI)',
            ],
            [
                'nama' => 'D4 Teknologi Rekayasa Instrumentasi dan Kontrol (TRIK)',
            ],
            [
                'nama' => 'D4 Teknologi Rekayasa Elektro (TRE)',
            ],

        ];

        DB::table('jurusan')->insert($jurusan);
    }
}
