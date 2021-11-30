<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $filable = [
        'tentheloai',
        'slug_theloai',
        'mota',
        'kichhoat'
    ];
    protected $primaryKey = 'id';//khái báo nếu dùng thêm khóa chính nào nữa thì khai báo vô đây
    protected $table = 'theloai';//Model này khai báo sử dụng bảng danhmuc chứ không phải bảng DanhmucTruyen
    
    public function truyen(){
        return $this->hasMany('App\Models\Truyen','theloai_id','id');
    }
    public function nhieutheloaitruyen(){
        return $this->belongsToMany(Truyen::class,'thuocloai','theloai_id','truyen_id');
    }
}

