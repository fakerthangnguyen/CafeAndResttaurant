<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class Menu extends Controller
{
   public function index(){
    $loaiSP = LoaiSanPham::where('is_open', 1)->where('id_loai_san_pham_cha', 0)->get();
    return view('client.page.menu' ,compact('loaiSP'));
   }
}
