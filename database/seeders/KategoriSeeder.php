<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'nama' => 'Administrasi',
            ],
            [
                'nama' => 'Advertising & Public Relations',
            ],
            [
                'nama' => 'Agrikultur',
            ],
            [
                'nama' => 'Akuntansi dan Keuangan',
            ],
            [
                'nama' => 'Arts & Entertainment & Publishing',
            ],
            [
                'nama' => 'Asuransi',
            ],
            [
                'nama' => 'Customer Service',
            ],
            [
                'nama' => 'Desain',
            ],
            [
                'nama' => 'Event',
            ],
            [
                'nama' => 'Hospitality & Travel',
            ],
            [
                'nama' => 'Hukum & Keamanan',
            ],
            [
                'nama' => 'Human Resources',
            ],
            [
                'nama' => 'Informasi & Teknologi',
            ],
            [
                'nama' => 'Internet & New Media',
            ],
            [
                'nama' => 'Kecantikan',
            ],
            [
                'nama' => 'Kesehatan dan Kedokteran',
            ],
            [
                'nama' => 'Konstruksi dan Bangunan',
            ],
            [
                'nama' => 'Management Consulting',
            ],
            [
                'nama' => 'Non-Profit & Volunteer',
            ],
            [
                'nama' => 'Otomotif',
            ],
            [
                'nama' => 'Pabrik dan Manufaktur',
            ],
            [
                'nama' => 'Pekerjaan Umum',
            ],
            [
                'nama' => 'Pelayanan Profesional',
            ],
            [
                'nama' => 'Pendidikan Dan Pelatihan',
            ],
            [
                'nama' => 'Penjualan / Pemasaran',
            ],
            [
                'nama' => 'Perbankan',
            ],
            [
                'nama' => 'Programmer',
            ],
            [
                'nama' => 'Property & Real Estate',
            ],
            [
                'nama' => 'Research & Development',
            ],
            [
                'nama' => 'Restaurant & Hotel',
            ],
            [
                'nama' => 'Retail',
            ],
            [
                'nama' => 'Teknik',
            ],
            [
                'nama' => 'Telekomunikasi',
            ],
            [
                'nama' => 'Transportasi & Logistik',
            ],
        ];

        DB::table('kategori')->insert($kategori);
    }
}

