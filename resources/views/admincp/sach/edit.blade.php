@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Cập nhật sách</b></div>
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
                    <form method="POST" action="{{route('sach.update',[$sach->id])}}" enctype='multipart/form-data'>
                        @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tên sách</label>
                            <input type="text" class="form-control" value="{{$sach->tensach}}" onkeyup="ChangetoSlug();" name="tensach"  id="slug"  placeholder="Tên sách...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Slug sách</label>
                            <input type="text" class="form-control" value="{{$sach->slug_sach}}" name="slug_sach" id="convert_slug"  placeholder="Slug sách...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Từ khóa</label>
                            <input type="text" class="form-control" value="{{$sach->tukhoa}}" name="tukhoa" id="convert_slug"  placeholder="Từ khóa...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt sách</label>
                            <textarea name="tomtat"class="form-control" placeholder="Tóm tắt sách...">{{$sach->tomtat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung sách</label>
                            <textarea name="noidung"class="form-control"id="ckeditor_noidung_sach">{{$sach->noidung}}></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sách</label>
                            <input type="file" name="hinhanh"class="form-control-file">
                            <img src="{{asset('public/uploads/sach/'.$sach->hinhanh)}}" height=200 width=180>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Lượt xem</label>
                            <input type="text" class="form-control" value="{{$sach->views}}" name="views" id="convert_slug"  placeholder="Lượt xem...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="custom-select" name="kichhoat">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            </select>
                        </div>
                        <button type="submit" name="capnhat" class="btn btn-primary">Cập nhật</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
