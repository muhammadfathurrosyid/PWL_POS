<?php

namespace Database\Seeders;

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
            ['kategori_kode' => 'KTG001', 'nama_kategori' => 'Makanan'],
            ['kategori_kode' => 'KTG002', 'nama_kategori' => 'Minuman'],
            ['kategori_kode' => 'KTG003', 'nama_kategori' => 'Alat Tulis'],
            ['kategori_kode' => 'KTG004', 'nama_kategori' => 'Elektronik'],
            ['kategori_kode' => 'KTG005', 'nama_kategori' => 'Pakaian'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
