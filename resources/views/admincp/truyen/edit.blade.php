@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Cập nhật truyện</b></div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('truyen.update',[$truyen->id])}}" enctype='multipart/form-data'>
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->tentruyen}}" onkeyup="ChangetoSlug();" name="tentruyen"  id="slug"  placeholder="Tên truyện...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Slug truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen" id="convert_slug"  placeholder="Slug truyện...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Từ khóa</label>
                            <input type="text" class="form-control" value="{{$truyen->tukhoa}}" name="tukhoa"  id="slug"  placeholder="Tác giả">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                            <input type="text" class="form-control" value="{{$truyen->tacgia}}" name="tacgia"  id="slug"  placeholder="Tác giả">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt truyện</label>
                            <textarea name="tomtat" id="ckeditor_tomtat_truyen"class="form-control" placeholder="Tóm tắt truyện...">{{$truyen->tomtat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Danh mục truyện</label>
                            @foreach($danhmuc as $key => $muc)
                            <div class="form-check">
                                <input class="form-check-input" 
                                @if($thuocdanhmuc->contains($muc->id) ) checked 
                                @endif
                                name="danhmuc[]" type="checkbox" id="danhmuc_{{$muc->id}}" value="{{$muc->id}}">
                                <label class="form-check-label" for="danhmuc_{{$muc->id}}">{{$muc->tendanhmuc}}</label>                         
                            </div>
                            @endforeach
                            <!-- <select class="custom-select" name="danhmuc" aria-label="Default select example">
                                @foreach($danhmuc as $key => $muc)
                                <option {{$muc->id == $truyen->danhmuc_id ? 'selected' : ''}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Thể loại truyện</label>
                            @foreach($theloai as $key => $the)
                            <div class="form-check">
                                <input class="form-check-input"
                                @if($thuoctheloai->contains($the->id)) checked 
                                @endif
                                name="theloai[]" type="checkbox" id="theloai_{{$the->id}}" value="{{$the->id}}">
                                <label class="form-check-label" for="theloai_{{$the->id}}">{{$the->tentheloai}}</label>
                            </div>
                            @endforeach
                            <!-- <select class="custom-select" name="theloai" aria-label="Default select example">
                                @foreach($theloai as $key => $the)
                                <option {{$the->id == $truyen->theloai_id ? 'selected' : ''}} value="{{$the->id}}">{{$the->tentheloai}}</option>
                                @endforeach
                            </select> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh truyện</label>
                            <input type="file" name="hinhanh" class="form-control-file">
                            <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height=200 width=180>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="custom-select" name="kichhoat">
                            @if($truyen->kichhoat==1)
                                <option selected value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            @else
                                <option value="1">Kích hoạt</option>
                                <option selected value="2">Không kích hoạt</option>
                             @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Truyện nổi bật/hot</label>
                            <select class="custom-select" name="truyennoibat">
                            @if($truyen->truyen_noibat == 0) 
                                <option selected value="0">Truyện mới</option>
                                <option value="1">Truyện nổi bật</option>
                                <option value="2">Truyện xem nhiều</option>
                            @elseif($truyen->truyen_noibat == 1)
                                <option value="0">Truyện mới</option>
                                <option selected value="1">Truyện nổi bật</option>
                                <option value="2">Truyện xem nhiều</option>
                            @else($truyen->truyen_noibat == 2)
                                <option value="0">Truyện mới</option>
                                <option value="1">Truyện nổi bật</option>
                                <option selected value="2">Truyện xem nhiều</option>
                            @endif
                            </select>
                        </div>
                        
                        <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
