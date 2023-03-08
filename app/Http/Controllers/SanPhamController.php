<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    //show loại sản phẩm trong thanh menu
   public function index(){
    $loaiSP = LoaiSanPham::get();

    return view('admin_lte.pages.san_pham.index', compact('loaiSP'));
   }

   public function create(Request $request){
        SanPham::create($request->all());
        return response()-> json([
            'status' => true,
            'mess' => "Đã thêm thành công ",
           ]);
   }

   public function getData(){
    $listSP = SanPham::get();

        return response()->json([
            'list'  => $listSP,
        ]);

   }

   public function delete(Request $request){
    SanPham::where('id', $request->id)->first()->delete();
    return response()-> json([
        'status' => true,
        'mess' => "Đã xoá thành công",
       ]);
   }

   public function status(Request  $request){
    $sanPham = SanPham::where('id', $request->id)->first();
    if($sanPham->is_open == 1) {
        $sanPham->is_open = 0;
    } else {
        $sanPham->is_open = 1;
    }
    $sanPham->save();

    return response()->json([
        'status'    => 1,
        'mess'      => 'Đã đổi trạng thái thành công!'
    ]);
   }

   public function update(Request $request){
    $sanPham = SanPham::where('id', $request->id)->first();
    $sanPham->update($request->all());
    return response()-> json([
        'status' => true,
        'mess' => "Đã cập nhật thành công",
       ]);
   }

}
