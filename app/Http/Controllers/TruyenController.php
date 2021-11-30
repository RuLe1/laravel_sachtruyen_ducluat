<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\TheLoai;
use Carbon\Carbon;
use App\Models\ThuocDanh;
use App\Models\ThuocLoai;

class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_truyen = Truyen::with('thuocnhieudanhmuctruyen','thuocnhieutheloaitruyen')->orderBy('id','desc')->get();
        return view('admincp.truyen.index')->with(compact('list_truyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $theloai = TheLoai::orderby('id','desc')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','desc')->get();
        return view('admincp.truyen.create')->with(compact('danhmuc','theloai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->validate(
            [
                'tentruyen'=>'required|unique:truyen|max:255',
                'slug_truyen'=>'required|unique:truyen|max:255',
                'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,
                max_width=2000,max_height=3000',
                'kichhoat'=>'required',
                'tacgia'=>'required',
                'tomtat'=>'required',
                'danhmuc'=>'required',
                'theloai'=>'required',
                'tukhoa'=>'required',
                'tinhtrang'=>'required',
                'tomtat'=>'required',
                'truyennoibat' => 'required',
                'views'=>'required',
            ],
            [
                'tentruyen.unique'=>'Tên truyện đã có, xin nhập tên khác',
                'tentruyen.required'=>'Tên truyện phải bắt buộc nhập',
                'slug_truyen.unique'=>'Slug truyện đã có, xin nhập slug khác',
                'slug_truyen.required'=>'Tên slug phải bắt buộc nhập',
                'tacgia.required'=>'Tác giả bắt buộc phải nhập',
                'tukhoa.required'=>'Từ khóa bắt buộc phải nhập',
                'tomtat.required'=>'Tóm tắt truyện phải bắt buộc nhập',
                'hinhanh.required' =>'Hình ảnh truyện phải có',
                'tinhtrang.required' =>'Tình trạng truyện phải có',
                'views.required' =>'Lượt xem truyện phải có',
            ]   
            );
            $truyen = new Truyen();
            $truyen -> tentruyen = $data['tentruyen'];
            $truyen -> slug_truyen = $data['slug_truyen'];
            $truyen -> tukhoa = $data['tukhoa'];
            $truyen -> tinhtrang = $data['tinhtrang'];
            $truyen -> tacgia = $data['tacgia'];
            $truyen -> tomtat = $data['tomtat'];
            $truyen -> kichhoat = $data['kichhoat'];
            // $truyen -> danhmuc_id = $data['danhmuc'];
            // $truyen -> theloai_id = $data['theloai'];
            $truyen -> views = $data['views'];
            $truyen -> truyen_noibat = $data['truyennoibat'];
            foreach($data['danhmuc'] as $key => $danh){
                $truyen -> danhmuc_id = $danh[0];
            }
            foreach($data['theloai'] as $key => $the){
                $truyen -> theloai_id = $the[0];
            }
            
            //thêm ảnh vào folder 
            $get_image = $request->hinhanh;
            $path = 'public/uploads/truyen';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image -> move($path,$new_image);

            $truyen -> hinhanh = $new_image;
            $truyen->save();

            $truyen->thuocnhieudanhmuctruyen()->attach($data['danhmuc']);
            $truyen->thuocnhieutheloaitruyen()->attach($data['theloai']);

            return redirect()->back()->with('status','Thêm truyện thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truyen = Truyen::find($id);

        $thuocdanhmuc = $truyen->thuocnhieudanhmuctruyen;
        $thuoctheloai = $truyen->thuocnhieutheloaitruyen;

        $theloai = TheLoai::orderby('id','desc')->get();
        $danhmuc = DanhmucTruyen::orderBy('id','desc')->get();
        return view('admincp.truyen.edit')->with(compact('truyen','danhmuc','theloai','thuocdanhmuc','thuoctheloai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= $request->validate(
            [
                'tentruyen'=>'required|max:255',
                'slug_truyen'=>'required|max:255',
                'hinhanh' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,
                max_width=2000,max_height=3000',
                'tukhoa'=>'required|max:255',
                'tacgia'=>'required',
                'kichhoat'=>'required',
                'tomtat'=>'required',
                'danhmuc'=>'required',
                'theloai'=>'required',
                'truyennoibat'=>'required'
            ],
            [
                'tentruyen.unique'=>'Tên truyện đã có, xin nhập tên khác',
                'tentruyen.required'=>'Tên truyện phải bắt buộc nhập',
                'tukhoa.required'=>'Từ khóa phải bắt buộc nhập',
                'slug_truyen.unique'=>'Slug truyện đã có, xin nhập slug khác',
                'slug_truyen.required'=>'Tên slug phải bắt buộc nhập',
                'tacgia.required'=>'Tác giả bắt buộc phải nhập',
                'tomtat.required'=>'Tóm tắt truyện phải bắt buộc nhập',
               
            ]   
            );
            $truyen = Truyen::find($id);

            $truyen->thuocnhieudanhmuctruyen()->sync($data['danhmuc']);
            $truyen->thuocnhieutheloaitruyen()->sync($data['theloai']);

            $truyen -> tentruyen = $data['tentruyen'];
            $truyen -> slug_truyen = $data['slug_truyen'];
            $truyen -> tukhoa = $data['tukhoa'];
            $truyen -> tacgia = $data['tacgia'];
            $truyen -> tomtat = $data['tomtat'];
            $truyen -> kichhoat = $data['kichhoat'];
            // $truyen -> danhmuc_id = $data['danhmuc'];
            // $truyen -> theloai_id = $data['theloai'];
            $truyen -> updated_at = Carbon::now('Asia/Ho_Chi_Minh');
            $truyen -> truyen_noibat = $data['truyennoibat'];

            foreach($data['danhmuc'] as $key => $danh){
                $truyen->danhmuc_id = $danh[0];
            }
             foreach($data['theloai'] as $key => $the){
                $truyen->theloai_id = $the[0];
            }
            
            //thêm ảnh vào folder 
            $get_image = $request->hinhanh;
            if($get_image){
                $path = 'public/uploads/truyen/'.$truyen->hinhanh;
                if(file_exists($path)){
                    unlink($path);
                }

                $path = 'public/uploads/truyen/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                $get_image -> move($path,$new_image);

                $truyen -> hinhanh = $new_image;
            }
            $truyen->save();
            return redirect()->back()->with('status','Cập nhật truyện thành công');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $truyen = Truyen::find($id);
        $path = 'public/uploads/truyen/'.$truyen->hinhanh;
        
        if(file_exists($path)){
            unlink($path);
        }
        $truyen->thuocnhieudanhmuctruyen()->detach($truyen->danhmuc_id);
        $truyen->thuocnhieutheloaitruyen()->detach($truyen->theloai_id);

        Truyen::find($id)->delete();
        return redirect()->back()->with('status','Xóa truyện thành công');
    }
    public function truyennoibat(Request $request){
        $data = $request->all();
        $truyen = Truyen::find($data['truyen_id']);
        $truyen->truyen_noibat = $data['truyennoibat'];
        $truyen->save();
    }
}
