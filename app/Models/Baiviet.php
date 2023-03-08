<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    use HasFactory;
    protected $table = 'baiviets';

    protected $fillable = [
        'tieu_de_bai_viet',
        'slug_bai_viet',
        'hinh_anh_bai_viet',
        'mo_ta_ngan_bai_viet',
        'mo_ta_chi_tiet_bai_viet',

    ];
}
