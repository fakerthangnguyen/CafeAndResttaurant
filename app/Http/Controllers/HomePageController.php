<?php

namespace App\Http\Controllers;

use App\Models\EmployeeController;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index(){
        $banner = SanPham::where('is_open', 1)->get();
        $offer = SanPham::where('is_open', 1)->get()->take(1);
        $loaiSP = LoaiSanPham::where('is_open', 1)->where('id_loai_san_pham_cha', 0)->get();
        $sql = 'SELECT `san_phams`.*, B.id as `id_cha`
        FROM `san_phams` JOIN `loai_san_phams` As A on `san_phams`.`id_loai_san_pham` = A.id JOIN `loai_san_phams` as B on A.id_loai_san_pham_cha = B.id';
        $sanPham = DB::select($sql);
        //  dd($sanPham);
        $new = SanPham::where('is_open', 1)->where('id_loai_san_pham', 7)->get();

        return view('client.page.home', compact('banner', 'offer', 'loaiSP','sanPham','new'));
    }
}
