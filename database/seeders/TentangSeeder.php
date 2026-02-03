<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tentang::create([
            'id'=>'1',
            'deskripsi_aplikasi'=>'Aplikasi PPDB SMK Negeri 9 Malang',
            'versi_aplikasi'=>'1.0.0',
            'tanggal_dibuat'=>'2026-02-03',
            'created_at'=>'2026-02-03 12:00:00',
            'updated_at'=>'2026-02-03 12:00:00' ,
    ]);

    }
}
