@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Thêm sách</b></div>
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
                    <form method="POST" action="{{route('sach.store')}}" enctype='multipart/form-data'>
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tên sách</label>
                            <input type="text" class="form-control" value="{{old('tensach')}}" onkeyup="ChangetoSlug();" name="tensach"  id="slug"  placeholder="Tên sách...">
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tác giả</label>
                            <input type="text" class="form-control" value="{{old('tacgia')}}" name="tacgia"  placeholder="Tác giả">
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Slug sách</label>
                            <input type="text" class="form-control" value="{{old('slug_sach')}}" name="slug_sach" id="convert_slug"  placeholder="Slug sách...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Từ khóa</label>
                            <input type="text" class="form-control" value="{{old('tukhoa')}}" name="tukhoa" id="convert_slug"  placeholder="Từ khóa...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt sách</label>
                            <textarea name="tomtat" value="{{old('tomtat')}}"class="form-control" placeholder="Tóm tắt sách..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung sách</label>
                            <textarea name="noidung" value="{{old('noidung')}}"id="ckeditor_noidung_sach"class="form-control" placeholder="Nội dung sách..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sách</label>
                            <input type="file" name="hinhanh" value="{{old('hinhanh')}}class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Lượt xem</label>
                            <input type="text" class="form-control" value="{{old('views')}}" name="views" id="convert_slug"  placeholder="Lượt xem...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="custom-select" name="kichhoat">
                                <option value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Truyện nổi bật/hot</label>
                            <select class="custom-select" name="truyennoibat">
                                <option value="0">Truyện mới</option>
                                <option value="1">Truyện nổi bật</option>
                                <option value="2">Truyện xem nhiều</option>
                            </select>
                        </div> -->
                        <button type="submit" name="themsach" class="btn btn-primary">Thêm</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
