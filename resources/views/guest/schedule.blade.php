@extends('guest.layouts.app')

@push('custom-css')
    <style>
        .container{
            max-width: 100%;
            max-height: 100%;
        }
        .featured{
            margin: auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 15.625rem;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .featured > img{
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 100%;
        }
        header{
            background: #343A40;
            color: white;
            padding: 0.3125rem;

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

        .newspic{
            margin: auto;
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 7.8125rem;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            margin-right: 2rem;
            float:left;
        }
        .newspic > img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endpush

@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
            <div class="col-5">

                <div class="featured">
                    <img src="{{URL::asset('/uploads/postcovers/'. $primepost->cover)}}" alt="">
                </div>
                <h4><a href="/post/{{$primepost->id}}">{{$primepost->title}}</a></h4>
                <small>Ngày đăng: {{$primepost->created_at}}</small>
                <p>{{$primepost->summary}}</p>
                <div>
                    <header class="border-bottom">
                        <h4><i class="material-icons">bookmark</i>Tin Mới</h4>
                        @if(count($listposts) > 0)
                            @foreach ($listposts as $listpost)
                    </header>
                    <section>
                        <ul>
                            <li>
                                <div class="newspic">
                                    <img src="{{URL::asset('/uploads/postcovers/'. $listpost->cover)}}" alt="">
                                </div>
                                <div class="ext-right">
                                    <h5><a href="/post/{{$listpost->id}}">{{$listpost->title}}</a></h5>
                                    <p>{{$listpost->summary}}</p>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
                @endforeach
                @else
                    Không có bài viết nào!!
            </div>
            @endif
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
