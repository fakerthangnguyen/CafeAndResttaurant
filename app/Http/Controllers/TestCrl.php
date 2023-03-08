<?php

namespace App\Http\Controllers;

use App\Models\EmployeeController;
use Illuminate\Http\Request;

class TestCrl extends Controller
{
//    public function index()
//    {
//     return view('client.page.home');
//    }
    public function index(){
        $employee= EmployeeController::get();
        return view('client.page.about', compact('employee'));
    }

    public function index2(){
        return view('client.page.menu');
    }
}
