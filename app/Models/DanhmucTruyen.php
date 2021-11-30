<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucTruyen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $filable = [
        'tendanhmuc',
        'slug_danhmuc',
        'mota',
        'kichhoat'
    ];
    protected $primaryKey = 'id';//khái báo nếu dùng thêm khóa chính nào nữa thì khai báo vô đây
    protected $table = 'danhmuc';//Model này khai báo sử dụng bảng danhmuc chứ không phải bảng DanhmucTruyen

    public function truyen(){
        return $this->hasMany('App\Models\Truyen','danhmuc_id','id');
    }
    public function nhieutruyen(){
        return $this->belongsToMany(Truyen::class,'thuocdanh','danhmuc_id','truyen_id');
    }
}
