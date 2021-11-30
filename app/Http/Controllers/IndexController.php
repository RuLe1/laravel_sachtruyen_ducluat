<?php

namespace App\Http\Controllers;

use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\Chapter;
use App\Models\TheLoai;
use App\Models\ThuocDanh;
use App\Models\ThuocLoai;
use App\Models\Info;
use App\Models\Sach;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function timkiem_ajax(Request $request){
        $data = $request->all();
        if($data['keywords']){
            $truyen = Truyen::where('tinhtrang',1)->where('tentruyen','LIKE','%'.$data['keywords'].'%')->get();
            $output = '<ul class="dropdown-menu" style="display:block;">';
            foreach($truyen as $key => $tr){
                $output .='<li class="li_timkiem_ajax"><a href="#">'.$tr->tentruyen.'</a></li>'; 
            }
            $output .='</ul>';
            echo $output;
        }
    }
    public function tabs_danhmuc(Request $request){
        $data = $request->all();
        $output = '';
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('danhmuc_id',$data['danhmuc_id'])->get();
        foreach($truyen as $key => $value){
            $output.='<div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <img class="card-img-top" src="'.url('public/uploads/truyen/'.$value->hinhanh).'">
                            <div class="card-body">
                                <h5 class="title_truyen">'.$value->tentruyen.'</h5>
                                <p class="card-text"></p>
                                <div class="d-flex justify content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="btn btn-sm btn-outline-secondary">Xem truyen</a>
                                        <a href="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>100</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
        echo $output;
    }
    public function home(){
        $info = Info::find(1);
        //Seo
        $title = $info->tieude;
        $meta_desc = $info->mota;
        $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
        $url_canonical = \URL::current();
        $link_icon = url('public/uploads/logo/'.$info->logo);
        //Seo

        $og_image = url('public/uploads/logo/'.$info->logo);
        $theloai = TheLoai::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen = Truyen::orderBy('id','DESC')->where('kichhoat',1)->get();
        return view('pages.home')->with(compact('danhmuc','truyen','theloai','slide_truyen','info','og_image','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function docsach(){
        $info = Info::find(1);
         //Seo
         $title = $info->tieude;
         $meta_desc = $info->mota;
         $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
         $url_canonical = \URL::current();
         $link_icon = url('public/uploads/logo/'.$info->logo);
         //Seo
        $og_image = url('public/uploads/logo/'.$info->logo);
        $theloai = TheLoai::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $sach = Sach::orderBy('id','DESC')->where('kichhoat',1)->paginate(12);
        return view('pages.sach')->with(compact('danhmuc','sach','theloai','slide_truyen','info','og_image','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function xemsachnhanh(Request $request){
        $sach_id = $request->sach_id;
        $sach = Sach::find($sach_id);

        $output['tieude_sach'] = $sach->tensach;
        $output['noidung_sach'] = $sach->noidung;
        
        echo json_encode($output);
    }
    public function danhmuc($slug){
        $info = Info::find(1);
         //Seo
         $title = $info->tieude;
         $meta_desc = $info->mota;
         $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
         $url_canonical = \URL::current();
         $link_icon = url('public/uploads/logo/'.$info->logo);
         //Seo
        $og_image = url('public/uploads/logo/'.$info->logo);
        $theloai = TheLoai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $danhmuctruyen = DanhmucTruyen::where('slug_danhmuc',$slug)->first();

        $nhiutruyen = [];
        foreach($danhmuctruyen->nhieutruyen as $danh){
            $nhiutruyen[] = $danh->id;
        }

        $tendanhmuc = $danhmuctruyen->tendanhmuc;
        $truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->orderBy('id','DESC')->where('kichhoat',1)->whereIn('id',$nhiutruyen)->paginate(12);

        return view('pages.danhmuc')->with(compact('danhmuc','truyen','tendanhmuc','theloai','slide_truyen','info','og_image','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function theloai($slug){
        $info = Info::find(1);
         //Seo
         $title = $info->tieude;
         $meta_desc = $info->mota;
         $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
         $url_canonical = \URL::current();
         $link_icon = url('public/uploads/logo/'.$info->logo);
         //Seo
        $og_image = url('public/uploads/logo/'.$info->logo);

        $theloai = TheLoai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $theloai_id = TheLoai::where('slug_theloai',$slug)->first();
        $theloaitruyen = Theloai::find($theloai_id->id);

        $nhiutruyen = [];
        foreach($theloaitruyen->nhieutheloaitruyen as $the){
            $nhiutruyen[] = $the->id;
        }
        $tentheloai = $theloai_id->tentheloai;
        $truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->orderBy('id','DESC')->where('kichhoat',1)->whereIn('id',$nhiutruyen)->get();

        return view('pages.theloai')->with(compact('danhmuc','truyen','theloai','tentheloai','slide_truyen','info','og_image','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function xemtruyen($slug){
        $info = Info::find(1);
         //Seo
         $title = $info->tieude;
         $meta_desc = $info->mota;
         $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
         $url_canonical = \URL::current();
         $link_icon = url('public/uploads/logo/'.$info->logo);
         //Seo
        $og_image = url('public/uploads/logo/'.$info->logo);

        $theloai = TheLoai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('slug_truyen',$slug)->where('kichhoat',1)->first();
        $chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->get();
        $chapter_dau = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->id)->first();
        $chapter_moinhat = Chapter::with('truyen')->orderBy('id','DESC')->where('truyen_id',$truyen->id)->first();

        $truyennoibat = Truyen::where('truyen_noibat',1)->take(20)->get();
        $truyenxemnhieu = Truyen::where('truyen_noibat',2)->take(20)->get();
        $nhiutruyen = '';
        foreach($truyen->thuocnhieudanhmuctruyen as $danh){
            $nhiutruyen = $danh->id;
        }
        $cungdanhmuc = DanhmucTruyen::with('nhieutruyen')->where('id',$nhiutruyen)->take(16)->get();        
        return view('pages.truyen')->with(compact('danhmuc','truyen','chapter','cungdanhmuc','chapter_dau','theloai','slide_truyen','info','og_image','chapter_moinhat','truyennoibat','truyenxemnhieu','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function xemchapter($slug){
        $info = Info::find(1);
         //Seo
         $title = $info->tieude;
         $meta_desc = $info->mota;
         $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
         $url_canonical = \URL::current();
         $link_icon = url('public/uploads/logo/'.$info->logo);
         //Seo
        $og_image = url('public/uploads/logo/'.$info->logo);
        $slide_truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $theloai = TheLoai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();
        $truyen = Chapter::where('slug_chapter',$slug)->first();
        //breadcrumb
        $truyen_breadcrumb = Truyen::with('danhmuctruyen','theloai')->where('id',$truyen->truyen_id)->first();
        //endbreadcrumb

        $chapter = Chapter::with('truyen')->where('slug_chapter',$slug)->where('truyen_id',$truyen->truyen_id)->where('kichhoat',1)->first();
        $all_chapter = Chapter::with('truyen')->orderBy('id','ASC')->where('truyen_id',$truyen->truyen_id)->get();

        $next_chapter =  Chapter::where('truyen_id',$truyen->truyen_id)->where('id','>',$chapter->id)->min('slug_chapter');
        $previous_chapter =  Chapter::where('truyen_id',$truyen->truyen_id)->where('id','<',$chapter->id)->max('slug_chapter');

        $max_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','DESC')->first();
        $min_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id','ASC')->first();

        return view('pages.chapter')->with(compact('danhmuc','chapter','all_chapter','next_chapter','previous_chapter','max_id','min_id','theloai','truyen_breadcrumb','slide_truyen','info','og_image','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function timkiem(Request $request){
        $info = Info::find(1);
         //Seo
         $title = $info->tieude;
         $meta_desc = $info->mota;
         $meta_keywords = 'sachtruyen247, doc truyen tranh, doc truyen trinh tham, đọc truyện tranh';
         $url_canonical = \URL::current();
         $link_icon = url('public/uploads/logo/'.$info->logo);
         //Seo
        $og_image = url('public/uploads/logo/'.$info->logo);
        $data = $request->all();

        $slide_truyen = Truyen::orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $theloai = TheLoai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();

        $tukhoa = $data['tukhoa'];
        $truyen = Truyen::with('danhmuctruyen','theloai')->where('tentruyen','LIKE','%'.$tukhoa.'%')->orwhere('tomtat','LIKE','%'.$tukhoa.'%')->orwhere('tacgia','LIKE','%'.$tukhoa.'%')->get();
        return view('pages.timkiem')->with(compact('danhmuc','truyen','theloai','slide_truyen','tukhoa','info','og_image','title','meta_desc','meta_keywords','url_canonical','og_image','link_icon'));
    }
    public function tag($tag){
        $info = Info::find(1);
        $og_image = url('public/uploads/logo/'.$info->logo);
        // $info = Info::find(1);
        // $title = 'Tìm kiếm tags';
        // //seo
        // $meta_desc = 'Tìm kiếm tags';
        // $meta_keywords = 'Tìm kiếm tags';
        // $url_canonical = \URL::current();
        // $og_image = url('public/uploads/logo/'.$info->logo);
        // $link_icon = url('public/uploads/logo/'.$info->logo);
        // //end seo
        $slide_truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->orderBy('id','DESC')->where('kichhoat',1)->take(8)->get();
        $theloai = TheLoai::orderBy('id','DESC')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','DESC')->get();

        $tags = explode("-",$tag);

        $truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->where(
            function($query) use ($tags){
                for($i = 0; $i < count($tags); $i++){
                    $query ->orwhere('tukhoa','LIKE','%'.$tags[$i].'%');
                }
            })->paginate(12);
        return view('pages.tag')->with(compact('danhmuc','truyen','theloai','slide_truyen','tag','info','og_image'));
        }
}