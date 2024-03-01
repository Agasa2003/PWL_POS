<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Muthe', 'penjualan_kode' => '12072004', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Greesela', 'penjualan_kode' => '10012006', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Shani', 'penjualan_kode' => '05101998', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Marsha', 'penjualan_kode' => '09012006', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Olla', 'penjualan_kode' => '26022005', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Oniel', 'penjualan_kode' => '26072002', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Gita', 'penjualan_kode' => '30062001', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Gracia', 'penjualan_kode' => '31081999', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Ella', 'penjualan_kode' => '07082006', 'penjualan_tanggal' => '2024-03-01'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Oline', 'penjualan_kode' => '03092007', 'penjualan_tanggal' => '2024-03-01'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
