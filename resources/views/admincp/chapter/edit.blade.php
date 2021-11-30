@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Cập nhật chapter</b></div>
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
                    <form method="POST" action="{{route('chapter.update',[$chapter->id])}}">
                        @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tiêu đề chapter</label>
                            <input type="text" class="form-control" value="{{$chapter->tieude}}" onkeyup="ChangetoSlug();" name="tieude"  id="slug"  placeholder="Tên chapter...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Slug chapter</label>
                            <input type="text" class="form-control" value="{{$chapter->slug_chapter}}" name="slug_chapter" id="convert_slug"  placeholder="Slug chapter...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tóm tắt chapter</label>
                            <input type="text" class="form-control" value="{{$chapter->tomtat}}" name="tomtat" id="exampleInputEmail1"  placeholder="Tóm tắt chapter...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Nội dung</label>
                            <textarea class="form-control" id="ckeditor_noidung_chapter" value="" name="noidung" id="exampleInputEmail1"  row='5' placeholder="Nội dung...">{{$chapter->noidung}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Thuộc truyện</label>
                            <select class="custom-select" name="truyen_id" aria-label="Default select example">
                                @foreach($truyen as $key => $value)
                                <option {{$chapter->truyen_id == $value->id ? 'selected' :''}} value="{{$value->id}}">{{$value->tentruyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="custom-select" name="kichhoat"aria-label="Default select example">
                            @if($chapter->kichhoat==1)
                                <option selected value="1">Kích hoạt</option>
                                <option value="2">Không kích hoạt</option>
                            @else
                                <option value="1">Kích hoạt</option>
                                <option selected value="2">Không kích hoạt</option>
                             @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
