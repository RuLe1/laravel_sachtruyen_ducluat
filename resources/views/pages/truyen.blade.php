@extends('../layout')
{{--@section('slide')
    @include('pages.slide')
@endsection--}}
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
    @foreach($truyen->thuocnhieudanhmuctruyen as $key => $breadcrumb_danh)
   	<li class="breadcrumb-item"><a href="{{url('danh-muc/'.$breadcrumb_danh->slug_danhmuc)}}">{{$breadcrumb_danh->tendanhmuc}}</a></li>
    @endforeach
    <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
            </div>
            <div class="col-md-9">
                <ul class="infotruyen" style="list-style: none">
                    <div class="fb-share-button" style="display:block;padding-bottom:3px"data-href="{{$url_canonical}}" data-layout="button_count" data-size="small"><a target="_blank" href=" https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    <div class="zalo-share-button" data-href="{{$url_canonical}}" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize="false"></div>
                    <!-- lấy biến wishlist -->
                    <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title">
					<input type="hidden" value="{{\URL::current()}}" class="wishlist_url">
					<input type="hidden" value="{{$truyen->id}}" class="wishlist_id">

                    <li>Tên truyện: <b>{{$truyen->tentruyen}}</b></li>
                    <li>Ngày đăng: {{$truyen->created_at->diffForHumans()}}</li>
                    <li>Tác giả: {{$truyen->tacgia}}</li>
                    <li>Danh mục truyện:
                    @foreach($truyen->thuocnhieudanhmuctruyen as $thuocdanh)
                        <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}"><span class="badge badge-dark">{{$thuocdanh->tendanhmuc}}</span></a>
                    @endforeach
                    </li>
					{{-- <li>Danh mục truyện : <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li> --}}
                    <li>Thể loại truyện : 
                    @foreach($truyen->thuocnhieutheloaitruyen as $thuocloai)     
                        <a href="{{url('the-loai/'.$thuocloai->slug_theloai)}}"><span class="badge badge-info">{{$thuocloai->tentheloai}}</span></a>
                    @endforeach
                    </li>
                    {{-- <li>Thể loại truyện: <a href="{{url('the-loai/'.$truyen->theloai->slug_theloai)}}"><span class="badge badge-info">{{$truyen->theloai->tentheloai}}</span></a></li> --}}
                    @php
                    $mucluc = count($chapter);
                    @endphp
                    <li>Số chapter: {{$mucluc}}</li>
                    <li>Số lượt xem: 2000</li>
                    <li><a class="xemmucluc"style="cursor: pointer;">Xem mục lục</a></li>
                    @if($chapter_dau)
                    <li>
                        <a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc truyện</a>
                        <button class="btn btn-danger btn-thich_truyen"><i class="fa fa-heart" aria-hidden="true"></i>Thích truyện</button>
                    </li>
                    <li><a href="{{url('xem-chapter/'.$chapter_moinhat->slug_chapter)}}" class="btn btn-success mt-3">Đọc chương mới nhất</a></li>
                    @else
                    <li><a class="btn btn-danger">Hiện tại chưa có chương để đọc</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="col md-12">
            <p>
               {{$truyen->tomtat}} 
            </p>
        </div>
            <hr>
            <style>
            .tagcloud05 ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .tagcloud05 ul li {
                display: inline-block;
                margin: 0 0 .3em 1em;
                padding: 0;
            }
            .tagcloud05 ul li a {
                position: relative;
                display: inline-block;
                height: 23px;
                line-height: 22px;
                padding: 0 1em;
                background-color: #3498db;
                border-radius: 0 3px 3px 0;
                color: #fff;
                font-size: 12px;
                text-decoration: none;
                -webkit-transition: .2s;
                transition: .2s;
            }
            .tagcloud05 ul li a::before {
                position: absolute;
                top: 0;
                left: -15px;
                content: '';
                width: 0;
                height: 0;
                border-color: transparent #3498db transparent transparent;
                border-style: solid;
                border-width: 12px 15px 12px 0;
                -webkit-transition: .2s;
                transition: .2s;
            }
            .tagcloud05 ul li a::after {
                position: absolute;
                top: 50%;
                left: 0;
                z-index: 2;
                display: block;
                content: '';
                width: 6px;
                height: 6px;
                margin-top: -3px;
                background-color: #fff;
                border-radius: 100%;
            }
            .tagcloud05 ul li span {
                display: block;
                max-width: 100px;
                white-space: nowrap;
                text-overflow: ellipsis;
                overflow: hidden;
            }
            .tagcloud05 ul li a:hover {
                background-color: #555;
                color: #fff;
            }
            .tagcloud05 ul li a:hover::before {
                border-right-color: #555;
            }
            </style>
            <p>Từ khóa tìm kiếm:
                @php
                $tukhoa = explode(",", $truyen->tukhoa);
                @endphp
                <div class="tagcloud05">
                    <ul>
                        @foreach($tukhoa as $key => $tu)
                        <li><a href="{{url('tag/'.Str::slug($tu))}}"><span>{{$tu}}</span></a></li>   
                        @endforeach            
                    </ul>
                </div>

            </p>
            <h4>Danh sách chương</h4>
            <style type="text/javascript">
                ul.mucluctruyen{
                    -moz-column-count: 3;
                    -moz-column-gap: 20px;
                    -webkit-column-count: 3;
                    -webkit-column-gap: 20px;
                    column-count:3;
                    column-gap: 20px;
                }
            </style>
            <ul class="mucluctruyen">
                @php
                    $mucluc = count($chapter);
                @endphp
                @if($mucluc>0)
                    @foreach($chapter as $key => $chap)
                        <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}" style="color: #000;"><b>{{$chap->tieude}}</b></a></li>
                    @endforeach 
                @else
                    <li>Đang cập nhật mục lục...</li>
                @endif                          
            </ul>
            <div class="fb-comments" data-href="{{\URL::current()}}" data-width="" data-numposts="5"></div>
            <h4>Sách cùng danh mục</h4>
            <div class="row">
                @foreach($cungdanhmuc as $key => $cungdanh)
                    @foreach($cungdanh->nhieutruyen as $value)
                    @if($value->id != $truyen->id)
                    <div class="col-md-3">
                    <div class="card shadow-sm-3">
                        
                        <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
                        <div class="card-body">
                            <h4>{{$value->tentruyen}}</h4>
                        <p class="card-text">
                            @php
                            $tomtat = substr($value->tomtat, 0,150);
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
                            <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Xem truyện</button>
                            <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>3246</a>
                            </div>
                        </div>
                        </div>
                        </a>
                    </div>
                    </div>
                    @endif
                    @endforeach
                @endforeach
            </div>
    </div>
    <div class="col-md-3">
    <style type="text/css">
			.col-md-7.sidebar a {
			    padding: 0;
			    font-size: 15px;
			    text-decoration: none;
			    color: #000;
			}
			.col-md-7.sidebar {
			    padding: 0;
			}	
            .card-header{
				background: darkgray !important;
			}		
		</style>
		<h3 class="card-header">Truyện nổi bật</h3>
        @foreach($truyennoibat as $key => $noibat)
        <div class="row mt-2">
            <div class="col-md-5">
                <img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$noibat->hinhanh)}}" alt="$noibat->tentruyen">
            </div>
            <div class="col-md-7 sidebar">
                <a  href="{{url('xem-truyen/'.$noibat->slug_truyen)}}">
                    <p>{{$noibat->tentruyen}}</p>
                    <p><i class="fas fa-eye"></i>{{$noibat->views}}</p>
                </a>
            </div>
        </div>
        @endforeach
        <h3 class="card-header">Truyện xem nhiều</h3>
        @foreach($truyenxemnhieu as $key => $xemnhieu)
        <div class="row mt-2">
            <div class="col-md-5">
                <img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$xemnhieu->hinhanh)}}" alt="$xemnhieu->tentruyen">
            </div>
            <div class="col-md-7 sidebar">
                <a  href="{{url('xem-truyen/'.$xemnhieu->slug_truyen)}}">
                    <p>{{$xemnhieu->tentruyen}}</p>
                    <p><i class="fas fa-eye"></i>{{$xemnhieu->views}}</p>
                </a>
            </div>
        </div>
        @endforeach
		<h3 class="card-header">Truyện yêu thích</h3>
		<div class="thich-truyen" id="yeuthich"></div>
	</div>   
</div>
@endsection