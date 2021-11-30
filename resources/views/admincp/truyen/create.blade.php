@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Thêm truyện</b></div>
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
                    <form method="POST" action="{{route('truyen.store')}}" enctype='multipart/form-data'>
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                            <input type="text" class="form-control" value="{{old('tentruyen')}}" onkeyup="ChangetoSlug();" name="tentruyen"  id="slug"  placeholder="Tên truyện...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                            <input type="text" class="form-control" value="{{old('tacgia')}}" name="tacgia"  placeholder="Tác giả">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Slug truyện</label>
                            <input type="text" class="form-control" value="{{old('slug_truyen')}}" name="slug_truyen" id="convert_slug"  placeholder="Slug truyện...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Từ khóa</label>
                            <input type="text" class="form-control" value="{{old('tukhoa')}}" name="tukhoa" id="convert_slug"  placeholder="Từ khóa...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tình trạng</label>
                            <input type="text" class="form-control" value="{{old('tinhtrang')}}" name="tinhtrang" id="convert_slug"  placeholder="Tình trạng...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt truyện</label>
                            <textarea name="tomtat" id="ckeditor_tomtat_truyen"class="form-control" placeholder="Tóm tắt truyện..."></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Danh mục truyện</label><br>
                            @foreach($danhmuc as $key => $muc)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="danhmuc[]"id="danhmuc_{{$muc->id}}" value="{{$muc->id}}">
                                <label class="form-check-label" for="danhmuc_{{$muc->id}}">{{$muc->tendanhmuc}}</label>
                            </div>
                            <br>
                            @endforeach
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Thể loại truyện</label></br>
                        @foreach($theloai as $key => $the)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="theloai[]"id="theloai_{{$the->id}}" value="{{$the->id}}">
                                <label class="form-check-label" for="theloai_{{$the->id}}">{{$the->tentheloai}}</label>
                            </div>
                            <br>
                            @endforeach
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Danh mục truyện</label>
                            <select class="custom-select" name="danhmuc" aria-label="Default select example">
                                @foreach($danhmuc as $key => $muc)
                                <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Thể loại truyện</label>
                            <select class="custom-select" name="theloai" aria-label="Default select example">
                                @foreach($theloai as $key => $the)
                                <option value="{{$the->id}}">{{$the->tentheloai}}</option>
                                @endforeach
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh truyện</label>
                            <input type="file" name="hinhanh" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="custom-select" name="kichhoat">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Truyện nổi bật/hot</label>
                            <select class="custom-select" name="truyennoibat">
                                <option value="0">Truyện mới</option>
                                <option value="1">Truyện nổi bật</option>
                                <option value="2">Truyện xem nhiều</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lượt xem</label>
                            <input type="text" class="form-control" value="{{old('views')}}" name="views"  aria-describedby="emailHelp" placeholder="Lượt xem">
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
