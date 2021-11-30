<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates = [
	    'created_at',
	    'updated_at'
	];
    protected $filable = [
        'tensach',
        'slug_sach',
        'tacgia',
        'tomtat',
        'hinhanh',
        'kichhoat',
        'views',
        'tukhoa',
        'noidung',
        'created_at',
        'updated_at',
    ];
    protected $primaryKey = 'id';//khái báo nếu dùng thêm khóa chính nào nữa thì khai báo vô đây
    protected $table = 'sach';//Model này khai báo sử dụng bảng danhmuc chứ không phải bảng DanhmucTruyen

}
