<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $dates = [
	    'created_at',
	    'updated_at'
	];
    protected $filable = [
        'tentruyen',
        'slug_truyen',
        'tacgia',
        'tomtat',
        'danhmuc_id',
        'hinhanh',
        'kichhoat',
        'theloai_id',
        'tinhtrang',
        'tukhoa',
        'created_at',
        'updated_at',
        'truyen_noibat',
        'views'
    ];
    protected $primaryKey = 'id';//khái báo nếu dùng thêm khóa chính nào nữa thì khai báo vô đây
    protected $table = 'truyen';//Model này khai báo sử dụng bảng danhmuc chứ không phải bảng DanhmucTruyen

    public function danhmuctruyen(){
        return $this->belongsTo('App\Models\DanhmucTruyen','danhmuc_id','id');
    }
    public function chapter(){
        return $this->hasMany('App\Models\Chapter','chapter_id','id');
    }
    public function theloai(){
        return $this->belongsTo('App\Models\TheLoai','theloai_id','id');
    }
    public function thuocnhieudanhmuctruyen(){
        return $this->belongsToMany(DanhmucTruyen::class,'thuocdanh','truyen_id','danhmuc_id');
    }
    public function thuocnhieutheloaitruyen(){
        return $this->belongsToMany(TheLoai::class,'thuocloai','truyen_id','theloai_id');
    }
}
