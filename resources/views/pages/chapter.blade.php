@extends('../layout')
{{--@section('slide')
    @include('pages.slide')
@endsection--}}
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
    <li class="breadcrumb-item"><a href="{{url('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a></li>
    @foreach($truyen_breadcrumb->thuocnhieudanhmuctruyen as $key => $breadcrumb_danh)
    <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$breadcrumb_danh->slug_danhmuc)}}">{{$breadcrumb_danh->tendanhmuc}}</a></li>
    @endforeach
    <li class="breadcrumb-item"><a href="{{url('xem-truyen/'.$chapter->truyen->slug_truyen)}}">{{$chapter->truyen->tentruyen}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$truyen_breadcrumb->tentruyen}}</li>
  </ol>
</nav>
<div class="row">
    <div class="col-md-12">
       <h4>{{$chapter->truyen->tentruyen}}</h4>
        <p>Chương hiện tại: {{$chapter->tieude}}</p>
            <div class="col-md-5">
                <style type="text/css">
                    .isDisabled{
                        color: currentColor;
                        pointer-events: none;
                        opacity: 0.5;
                        text-decoration: none;
                    }
                            
                    .noidungchuong {
                        padding: 20px;
                        background: #fff;
                        color:#000;
                        /* line-height: 40px !important;
                        font-size: 20px !important;
                        font-family: "Palatino Linotype","Arial","Times New Roman",sans-serif !important; */
            }
                </style>
               <div class="form-group">
                   <label for="exampleInputEmail1">Chọn chương</label>
                   <p><a class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisabled' : ''}}" href="{{url('xem-chapter/'.$previous_chapter)}}">Tập trước</a></p>
                   <select name="kichhoat" class="custom-select select-chapter">
                       @foreach($all_chapter as $key=>$chap)
                       <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
                       @endforeach
                   </select>
                   <p><a class="btn btn-primary mt-2 {{$chapter->id==$max_id->id ? 'isDisabled' : ''}}" href="{{url('xem-chapter/'.$next_chapter)}}">Tập sau</a></p>
               </div> 
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Màu sắc</label>
                    <select class="form-control" id="change-color">
                        <option value="fff">Mặc định</option>
                        <option value="ddd">Màu tối</option>
                        <option value="f4f4f4">Xám nhạt</option>
                        <option value="e9ebee">Xanh nhạt</option>
                        <option value="E1E4F2">Xanh đậm</option>
                        <option value="F4F4E4">Vàng nhạt</option>
                        <option value="EAE4D3">Màu sepia</option>
                        <option value="FAFAC8">Vàng đậm</option>
                        <option value="EFEFAB">Vàng ố</option> 
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Font chữ</label>
                    <select class="form-control" id="change-font">
                        <option value="Palatino Linotype">Palatino Linotype</option>
                        <option value="Bookerly">Bookerly</option>
                        <option value="Segoe UI">Segoe UI</option>
                        <option value="Patrick Hand">Patrick Hand</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Verdana">Verdana</option>
                        <option value="Tahoma">Tahoma</option>
                        <option value="Arial">Arial</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Chiều cao dòng</label>
                        <select class="form-control" id="change-lineheight">
                            <option value="40">40</option>
                            <option value="60">60</option>
                            <option value="80">80</option>
                            <option value="100">100</option>
                            <option value="120">120</option>
                        </select>
                      </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Kích thước chữ</label>
                        <input type="hidden" class="fontsize">
                        <button type="button" class="btn btn-primary  size-increment">Tăng</button>
                        <button type="button" data-orig_size="25px" class="btn btn-info size-orig">Ban đầu</button>
                        <button type="button" class="btn btn-secondary size-decrement">Giảm</button>
                </div>
            </div>
            <div class="noidungchuong" style="display:block">
                {!!$chapter->noidung!!}
               
            </div>
            <h4>Lưu và chia sẻ truyện: </h4>
                <div class="fb-share-button" style="display:block;padding-bottom:3px"data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize="false"></div>
                </br>
                <h3>Bình luận của bạn: </h3>
                <div class="fb-comments" data-href="{{\URL::current()}}" data-width="" data-numposts="20"></div>
        </div>
</div>
@endsection