@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12-lg">
            <div class="card">
                @php 
                    $count = count($list_truyen);
                @endphp
                <div class="card-header"><b>Liệt kê truyện: Tổng {{$count}}</b></div>

                <div class="card-body">
                    <div id="thongbao"></div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên truyện</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Slug truyện</th>
                                <!-- <th scope="col">Tóm tắt</th> -->
                                <th scope="col">Danh mục</th>
                                <th scope="col">Thể loại</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Nổi bật/hot</th>
                                <th scope="col">Ngày tạo</th>
                                <th scope="col">Ngày cập nhật</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_truyen as $key =>$truyen)
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$truyen->tentruyen}}</td>
                                    <td><img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height=200 width=180></td>
                                    <td>{{$truyen->slug_truyen}}</td>
                                    <!-- <td>{{$truyen->tomtat}}</td> -->
                                    <td>
                                        {{--$truyen->danhmuctruyen->tendanhmuc--}}
                                        @foreach($truyen->thuocnhieudanhmuctruyen as $thuocdanh)
                                        <span class="badge badge-dark">{{$thuocdanh->tendanhmuc}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        {{--$truyen->theloai->tentheloai--}}
                                        @foreach($truyen->thuocnhieutheloaitruyen as $thuocloai)
                                            <span class="badge badge-secondary">{{$thuocloai->tentheloai}}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($truyen->kichhoat==1)
                                            <span class="text text-success">Kích hoạt</span>
                                        @else
                                            <span class="text text-danger">Không kích hoạt</span>
                                        @endif
                                    </td>
                                    <td width="100%">
                                        @if($truyen->truyen_noibat == 0)
                                        <form>
                                            @csrf
                                            <!-- dùng data- ... = để lưu trữ dữ liệu trên trang mà ko cần truy vấn -->
                                            <select class="custom-select truyennoibat" name="truyennoibat" data-truyen_id="{{$truyen->id}}">
                                                <option selected value="0">Truyện mới</option>
                                                <option value="1">Truyện nổi bật</option>
                                                <option value="2">Truyện xem nhiều</option>
                                            </select>
                                        </form>
                                        @elseif($truyen->truyen_noibat == 1)
                                        <form>
                                            @csrf
                                            <select class="custom-select truyennoibat" name="truyennoibat"data-truyen_id="{{$truyen->id}}">
                                                <option value="0">Truyện mới</option>
                                                <option selected value="1">Truyện nổi bật</option>
                                                <option value="2">Truyện xem nhiều</option>
                                            </select>
                                        </form>
                                        @else 
                                        <form>
                                            @csrf
                                            <select class="custom-select truyennoibat" name="truyennoibat"data-truyen_id="{{$truyen->id}}">
                                                <option value="0">Truyện mới</option>
                                                <option value="1">Truyện nổi bật</option>
                                                <option selected value="2">Truyện xem nhiều</option>
                                            </select>
                                        </form>
                                        @endif
                                    </td>
                                    <td>{{$truyen->created_at}}</br>{{$truyen->created_at->diffForHumans()}}</td>
                                    <td>{{$truyen->updated_at}}</br>{{$truyen->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <form action="{{route('truyen.destroy',[$truyen->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('truyen.edit',[$truyen->id])}}" class="btn btn-primary">Edit</a>
                                        <button onclick="return confirm('Bạn muốn xóa truyện này không?')"class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
