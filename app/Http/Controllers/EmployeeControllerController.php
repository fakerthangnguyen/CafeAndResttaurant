<?php

namespace App\Http\Controllers;

use App\Models\EmployeeController;
use Illuminate\Http\Request;

class EmployeeControllerController extends Controller
{
    public function index(){
        return view('admin_lte.pages.employee.index');
    }

    public function create(Request $request){
        EmployeeController::create($request->all());
        return response()-> json([
            'status' => true,
            'mess' => "Đã thêm thành công ",
           ]);
    }

    public function getData(){
        $listSP = EmployeeController::get();

        return response()->json([
            'list'  => $listSP,
        ]);

    }

    public function delete(Request $request){
        EmployeeController::where('id', $request->id)->first()->delete();
        return response()-> json([
            'status' => true,
            'mess' => "Đã xoá thành công ",
           ]);
    }
}
