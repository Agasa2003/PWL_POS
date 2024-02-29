<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => 'MNM',
                'kategoi_nama' => 'Minuman',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'MKN',
                'kategoi_nama' => 'Makan',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'SNC',
                'kategoi_nama' => 'Makanan Ringan (Sanack)',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'SBK',
                'kategoi_nama' => 'Sembako',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'IC',
                'kategoi_nama' => 'Ice Cream',
                'created_at' => now(),
            ],
        ];

        DB::table('m_kategori')->insert($data);
    }
}

