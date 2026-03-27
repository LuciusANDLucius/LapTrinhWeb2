<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    // Khai báo tên bảng thực tế trong database của bạn
    protected $table = 'topic'; 
}