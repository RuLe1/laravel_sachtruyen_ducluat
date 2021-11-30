<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;
use Carbon\Carbon;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:publish book|edit book|delete book|add book',['only' => ['index','show']]);
        $this->middleware('permission:add book',['only' => ['create','store']]);
        $this->middleware('permission:edit book',['only' => ['edit','update']]);
        $this->middleware('permission:delete book',['only' => ['destroy']]);

    }
    public function index()
    {
        $list_sach = Sach::orderBy('id','DESC')->get();
        return view('admincp.sach.index')->with(compact('list_sach'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.sach.create');
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
                'tensach'=>'required|unique:sach|max:255',
                'slug_sach'=>'required|unique:sach|max:255',
                'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,
                max_width=2000,max_height=3000',
                'kichhoat'=>'required',
                'tomtat'=>'required',
                'tukhoa'=>'required',
                'noidung'=>'required',
                'views'=>'required'
            ],
            [
                'tensach.unique'=>'Tên sách đã có, xin nhập tên khác',
                'tensach.required'=>'Tên sách phải bắt buộc nhập',
                'slug_sach.unique'=>'Slug sách đã có, xin nhập slug khác',
                'slug_sach.required'=>'Tên slug phải bắt buộc nhập',
                'tomtat.required'=>'Tóm tắt sách phải bắt buộc nhập',
                'noidung.required' =>'Nội dung sách phải có',
                'hinhanh.required' =>'Hình ảnh sách phải có',
                'tukhoa.required'=>'Từ khóa bắt buộc phải nhập',
                'views.required'=>'Lượt xem bắt buộc phải nhập',
            ]   
            );
            $sach = new Sach();
            $sach -> tensach = $data['tensach'];
            $sach -> slug_sach = $data['slug_sach'];
            $sach -> tukhoa = $data['tukhoa'];
            $sach -> tomtat = $data['tomtat'];
            $sach -> noidung = $data['noidung'];
            $sach -> kichhoat = $data['kichhoat'];
            $sach -> views = $data['views'];
            $sach -> created_at = Carbon::now('Asia/Ho_Chi_Minh');
            $sach -> updated_at = Carbon::now('Asia/Ho_Chi_Minh');

            //thêm ảnh vào folder 
            $get_image = $request->hinhanh;
            $path = 'public/uploads/sach';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image -> move($path,$new_image);

            $sach -> hinhanh = $new_image;
            $sach->save();
            return redirect()->back()->with('status','Thêm sách thành công');
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
        $sach = Sach::find($id);
        return view('admincp.sach.edit')->with(compact('sach'));
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
                'tensach'=>'required|max:255',
                'slug_sach'=>'required|max:255',
                'hinhanh' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,
                max_width=2000,max_height=3000',
                'kichhoat'=>'required',
                'tomtat'=>'required',
                'tukhoa'=>'required',
                'noidung'=>'required',
                'views'=>'required'
            ],
            [
                'tensach.required'=>'Tên sách phải bắt buộc nhập',
                'slug_sach.required'=>'Tên slug phải bắt buộc nhập',
                'tomtat.required'=>'Tóm tắt sách phải bắt buộc nhập',
                'noidung.required' =>'Nội dung sách phải có',
                'tukhoa.required'=>'Từ khóa bắt buộc phải nhập',
                'views.required'=>'Lượt xem bắt buộc phải nhập',
            ]   
            );
            $sach = Sach::find($id);
            $sach -> tensach = $data['tensach'];
            $sach -> slug_sach = $data['slug_sach'];

            $sach -> tukhoa = $data['tukhoa'];
            $sach -> tomtat = $data['tomtat'];
            $sach -> noidung = $data['noidung'];
            $sach -> kichhoat = $data['kichhoat'];
            $sach -> views = $data['views'];

            $sach -> created_at = Carbon::now('Asia/Ho_Chi_Minh');
            $sach -> updated_at = Carbon::now('Asia/Ho_Chi_Minh');

            //thêm ảnh vào folder 
            $get_image = $request->hinhanh;
            if($get_image){
                $path = 'public/uploads/sach/'.$sach->hinhanh;
                if(file_exists($path)){
                    unlink($path);
                }

                $path = 'public/uploads/sach/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                $get_image -> move($path,$new_image);

                $sach -> hinhanh = $new_image;
            }
            $sach->save();
            return redirect()->back()->with('status','Cập nhật sách thành công');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sach = Sach::find($id);
        $path = 'public/uploads/sach'.$sach->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        Sach::find($id)->delete();
        return redirect()->back()->with('status','Xóa sách thành công');
    }
}
