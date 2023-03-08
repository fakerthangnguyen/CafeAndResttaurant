<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeController extends Model
{
    use HasFactory;

   protected $table = 'employee_controllers';
   protected $fillable = [
            'ho_va_ten',
            'email',
            'so_dien_thoai',
            'hinh_anh',
            'mo_ta_chi_tiet',
            'ngay_sinh',
            'facebook',
            'instagram',
            'chuc_vu',
   ];
}
