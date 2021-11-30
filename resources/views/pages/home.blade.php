@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection
@section('content')
<!-- Nav tabs -->
<!-- <ul class="nav nav-tabs">
    @foreach($danhmuc as $key => $tab_danhmuc)
    <form>
        @csrf
    <li class="nav-item">
        <a data-danhmuc_id="{{$tab_danhmuc->id}}" class="nav-link tabs_danhmuc" data-toggle="tab" href="#{{$tab_danhmuc->slug_danhmuc}}">{{$tab_danhmuc->tendanhmuc}}</a>
    </li>
  </form>
  @endforeach
</ul> -->

<!-- <div id="tab_danhmuctruyen"></div> -->
               
    <h3 class="title_truyen">Truyện mới cập nhật</h3>
    <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
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
                    {{$tomtat.'....'}}
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
                </div>
                </div>
                </a>
            </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    <!---------- Sach hay xem nhieu ----------->
            
@endsection