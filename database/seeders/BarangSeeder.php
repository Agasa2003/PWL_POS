<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'barang_id' => 1,
                'kategori_id' => '1',
                'barang_kode' => 'MNM001',
                'barang_nama' => 'Aqua 1 Liter',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => '1',
                'barang_kode' => 'MNM002',
                'barang_nama' => 'Le Minerale 1 Liter',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => '2',
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Nasi Kuning',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => '2',
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Pecel Lele',
                'harga_beli' => 10000,
                'harga_jual' => 13000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => '3',
                'barang_kode' => 'SNC001',
                'barang_nama' => 'Wafer Tango Coklat',
                'harga_beli' => 7500,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => '3',
                'barang_kode' => 'SNC002',
                'barang_nama' => 'Oreo Coklat',
                'harga_beli' => 9000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => '4',
                'barang_kode' => 'SBK001',
                'barang_nama' => 'Beras Lahap 5KG',
                'harga_beli' => 78000,
                'harga_jual' => 81000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => '4',
                'barang_kode' => 'SBK002',
                'barang_nama' => 'Minyak Goreng Sunco',
                'harga_beli' => 37000,
                'harga_jual' => 38500,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => '5',
                'barang_kode' => 'IC001',
                'barang_nama' => 'Magnum Coklat',
                'harga_beli' => 12000,
                'harga_jual' => 13500,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => '5',
                'barang_kode' => 'IC002',
                'barang_nama' => 'Magnumm Vanilla',
                'harga_beli' => 12500,
                'harga_jual' => 13500,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
