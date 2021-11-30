<h3>Sách hay nên đọc</h3>
            <style type="text/css">
                .item img {
                        height: 230px;
                        border: 3px solid #000;
                        padding: 3px;
                }
            </style>

            <div class="owl-carousel owl-theme">
            @foreach($slide_truyen as $key => $slide)
                <div class="item">
                    <img src="{{asset('public/uploads/truyen/'.$slide->hinhanh)}}">
                    <h5>{{$slide->tentruyen}}</h5>
                    <p><i class="fas fa-eye"></i>{{$slide->views}}</p>
                   

                   
                    <a class="btn btn-danger btn-sm"  href="{{url('xem-truyen/'.$slide->slug_truyen)}}">Xem truyện</a>
                </div>
            @endforeach  
            </div>