<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_supplier' => 'PT Sumber Makmur', 'alamat' => 'Jakarta'],
            ['nama_supplier' => 'CV Minuman Segar', 'alamat' => 'Bandunga'],
            ['nama_supplier' => 'Toko Alat Tulis Jaya', 'alamat' => 'Surabaya'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
