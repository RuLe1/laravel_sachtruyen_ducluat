@extends('../layout')
{{-- @section('slide')
    @include('pages.slide')
@endsection --}}
@section('content')
<h3 class="title_truyen">Sách mới cập nhật</h3>
<div class="album py-2 bg-light">
    <div class="container">
    <div class="row">
        @foreach($sach as $key => $value)
        <div class="col-md-3">
        <div class="card mb-3 box-shadow">
            <img class="card-img-top" src="{{asset('public/uploads/sach/'.$value->hinhanh)}}">
            <div class="card-body">
                <h4>{{$value->tensach}}</h4>
            <p class="card-text">
                @php
                    $tomtat = substr($value->tomtat,0,150);
                @endphp    
                {{$tomtat.'....'}}
            </p>
            <div class="d-flex justify-content-between align-items-center">
                <form>
                    @csrf
                <div class="btn-group">
               <!-- Button trigger modal -->
                    <button type="button" id="{{$value->id}}"class="btn btn-primary xemsachnhanh" data-toggle="modal" data-target="#exampleModal">
                    Xem sách nhanh
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <div id="tieude_sach"></div>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="noidung_sach"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>{{$value->views}}</a>
                </div>
            </div>
            </div>
            </a>
        </div>
        </div>
        @endforeach
    </div>
    {{$sach->onEachSide(1)->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection