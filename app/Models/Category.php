<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Cần ghi đè tên bảng vì CSDL của bạn dùng số ít
    // Laravel sẽ tự kết hợp với prefix '0192' thành '0192category'
    protected $table = 'category'; 
}