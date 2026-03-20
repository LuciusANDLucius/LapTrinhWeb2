<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Nếu bạn đã cấu hình prefix là '0192' trong file .env, 
    // thì ở đây bạn chỉ cần điền tên bảng gốc là 'product'.
    // Laravel sẽ tự nối thành '0192product'.
    protected $table = 'product'; 

    // Nếu bạn CHƯA cấu hình prefix trong hệ thống, hãy điền đầy đủ:
    // protected $table = '0192product';
}