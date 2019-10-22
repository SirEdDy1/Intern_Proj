@extends('guest.layouts.app')

@push('custom-css')
    <style>
        .container{
            max-width: 100%;
            max-height: 100%;
        }
        header{
            background: #343A40;
            color: white;
            padding: 0.3125rem

        }
        ul {
            list-style: none; /* Remove list bullets */
            padding: 0;
            margin: 0;
        }
        li {
            clear: both;
        }

        li:before {
            content: ""; /* Insert content that looks like bullets */
        }
        .schedule{
            padding-top: 0.3125rem;
            padding-left: 0;
        }
        .schedule > p{
            font-size: 70%;
        }
        .summary > p{
            font-style: italic;
        }



    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endpush

@section('content')

    <div class="container m-0">
        <div class="row">
            <div class="col">
                <h4>Văn bản</h4>
                <ul>
                    <li><i class="material-icons">menu_book</i><a href="">Đơn xin đăng ký dạy thêm</a></li>
                    <li><i class="material-icons">menu_book</i><a href="">Phiếu đánh giá cuối năm học</a></li>
                    <li><i class="material-icons">menu_book</i><a href="">Kế hoạch tổ chức</a></li>
                </ul>
            </div>
            <div class="col-6 schedule">
                <h3>{{$post->title}}</h3>
                <img src="{{URL::asset('/uploads/postcovers/'. $post->cover)}}" alt="" width="500px" height="350px">
                <div>
                    <div class="summary">
                        <p>{{$post->summary}}</p>
                    </div>
                    <small>Ngày đăng: {{$post->created_at}}</small>
                    <p>{!!nl2br($post->content)!!}</p>
                    {{-- {!! !!} dung de populate html code. ban chat that {{}} no se convert het sang string de
                    tranh hacker xai xss/crsf --}}
                </div>
            </div>
            <div class="col">
                <h4>Liên hệ</h4>
                <ul>
                    <li><i class="material-icons">perm_device_information</i><a href="">SỔ ĐIỆN TỬ</a><br><small>Kết nối nhà trường và phụ huynh</small></li>
                    <li><i class="material-icons">perm_identity</i><a href="">QUẢN LÝ GIÁO VIÊN</a><br><small>Tra cứu danh sách giáo viên</small></li>
                    <li><i class="material-icons">folder_shared</i><a href="">DOWNLOAD PHẦN MỀM</a><br><small>Hỗ trợ giảng dạy học tập</small></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
