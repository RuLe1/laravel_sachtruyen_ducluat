@extends('../layout')
{{--@section('slide')
    @include('pages.slide')
@endsection--}}
@section('content')
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item">Tìm kiếm</li>
                </ol>
            </nav>
            <h3>Bạn tìm kiếm với từ khóa là: {{$tag}}</h3>
            <div class="album py-5 bg-light">
                <div class="container">
                <div class="row">
                    @php
                    $count = count($truyen);
                    @endphp
                    @if($count==0)
                        <div class="col-md-12">
                            <div class="card mb-12.box-shadow"> 
                                <div class="card-body">  
                                    <p>Không tìm thấy truyện...</p>
                                </div> 
                            </div>
                        </div>
                    @else
                    @foreach($truyen as $key => $value)
                    <div class="col-md-3">
                    <div class="card shadow-sm-3">
                        
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                        <div class="card-body">
                            <h4>{{$value->tentruyen}}</h4>
                        <p class="card-text">
                            @php 
                            $tomtat = substr($value->tomtat,0,150);
                            @endphp
                            {{$tomtat.'...'}}
                        </p>
                        @foreach($value->thuocnhieudanhmuctruyen as $thuocdanh)
                            <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}"><span class="badge badge-dark">{{$thuocdanh->tendanhmuc}}</span></a>
                        @endforeach
                        @foreach($value->thuocnhieutheloaitruyen as $thuocloai)
                            <a href="{{url('the-loai/'.$thuocloai->slug_theloai)}}"><span class="badge badge-info">{{$thuocloai->tentheloai}}</span></a>
                        @endforeach
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</button>
                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>{{$value->views}}</a>
                            </div>
                            <small class="text-muted">9 mins ago</small>
                        </div>
                        </div>
                        </a>
                    </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                </div>
            </div>
            <!---------- Sach hay xem nhieu ----------->
            
@endsection