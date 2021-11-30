<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $filable = [
        'truyen_id',
        'slug_chapter',
        'tomtat',
        'tieude',
        'noidung',
        'kichhoat'
    ];
    protected $primaryKey = 'id';//khái báo nếu dùng thêm khóa chính nào nữa thì khai báo vô đây
    protected $table = 'chapter';//Model này khai báo sử dụng bảng danhmuc chứ không phải bảng DanhmucTruyen
    public function truyen(){
        return $this->belongsTo('App\Models\Truyen');
    }
}
