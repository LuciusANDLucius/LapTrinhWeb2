<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Thêm dòng này để dùng Thùng rác 
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use SoftDeletes; // Kích hoạt xóa mềm theo yêu cầu Bài 3 [cite: 151, 152]

    protected $table = 'product'; 

    /**
     * Thiết lập mối quan hệ với bảng Category (Danh mục)
     * Giúp lấy được tên danh mục thay vì chỉ hiện ID 
     */
    public function category()
        {
            // Đảm bảo dùng Category::class đã sửa ở Bước 1
            return $this->belongsTo(Category::class, 'category_id');
        }

        public function brand(): BelongsTo
        {
            return $this->belongsTo(Brand::class, 'brand_id');
        }
}