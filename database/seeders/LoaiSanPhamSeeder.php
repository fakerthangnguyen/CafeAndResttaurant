<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_san_phams')->delete();

        DB::table('loai_san_phams')->truncate();

        DB::table('loai_san_phams')->insert([
            ['ten_loai_san_pham' => 'Cà Phê', 'slug_loai_san_pham' => 'ca-phe', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Phindi', 'slug_loai_san_pham' => 'phindi', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Espresso', 'slug_loai_san_pham' => 'espresso', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Trà', 'slug_loai_san_pham' => 'tra', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Freeze', 'slug_loai_san_pham' => 'freeze', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Bánh', 'slug_loai_san_pham' => 'banh', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Món khác', 'slug_loai_san_pham' => 'mon-khac', 'id_loai_san_pham_cha' => 0, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Cà Phê Rang Xay', 'slug_loai_san_pham' => 'ca-phe-rang-xay', 'id_loai_san_pham_cha' => 1, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Cà Phê Phin', 'slug_loai_san_pham' => 'ca-phe-phin', 'id_loai_san_pham_cha' => 1, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Phindi1', 'slug_loai_san_pham' => 'phindi1', 'id_loai_san_pham_cha' => 2, 'is_open' => 1],
            ['ten_loai_san_pham' => 'Bánh1', 'slug_loai_san_pham' => 'banh1', 'id_loai_san_pham_cha' => 6, 'is_open' => 1],


        ]);
    }
}
