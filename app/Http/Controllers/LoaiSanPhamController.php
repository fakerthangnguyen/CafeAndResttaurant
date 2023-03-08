<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoaiSanPhamRequest;
use App\Http\Requests\DeleteLoaiSanPhamRequest;
use App\Http\Requests\UpdateLoaiSanPhamRequest;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoaiSanPhamController extends Controller
{
    public function index()
    {
        $loaiSanPham = LoaiSanPham::where('id_loai_san_pham_cha', 0)->get();

        return view('admin_lte.pages.loai_san_pham.index',compact('loaiSanPham'));
    }
    public function getData(){
        $sql        = "SELECT A.TEN_LOAI_SAN_PHAM AS TEN_LOAI_CHA, B.*  FROM LOAI_SAN_PHAMS A RIGHT JOIN LOAI_SAN_PHAMS B ON A.ID = B.ID_LOAI_SAN_PHAM_CHA";
        $danhMuc = DB::select($sql);

        return response()->json([
            'list' => $danhMuc
        ]);
    }

    public function create(CreateLoaiSanPhamRequest $request){
        LoaiSanPham::create($request->all());
       return response()-> json([
        'status' => true,
        'mess' => "Đã thêm thành công ",
       ]);



    }
    public function delete(DeleteLoaiSanPhamRequest $request){
        LoaiSanPham::where('id', $request->id)->first()->delete();

        return response()-> json([
            'status' => true,
            'mess' => "Đã xoá thành công",
           ]);
    }

    public function update(UpdateLoaiSanPhamRequest $request){
        $loaiSanPham =LoaiSanPham::where('id', $request->id)->first();
        $loaiSanPham->update($request->all());

        return response()-> json([
            'status' => true,
            'mess' => "Đã cập nhật thành công",
           ]);
    }

}
