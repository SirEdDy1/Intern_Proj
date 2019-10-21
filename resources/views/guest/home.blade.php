@extends('guest.layouts.app')

@push('custom-css')
    <style>
        .homepic{
            margin: auto;
            width: 80vw;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 400px;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .homepic > img{
            width: 80%;
            height: 80%;
            object-fit: cover;
            object-position: center;
        }
        .picbox{
            width: 250px;
            height: 150px;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }
        .picbox > img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .other{
            padding:auto;
            padding-top: 3rem;
        }
        .bigbox{
            width: 300px;
            height: 200px;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }
        .bigbox > img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .smallbox{
            width: 350px;
            height: 100px;
            overflow: hidden;
        }
        .smallbox > img{
            object-fit: cover;
            width: 100%;
            height: 100%;
            object-position: center;
        }
        .row{
            margin-left: 0;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="homepic col-12">
            <img src="{{URL::asset('/pic/Home.jpg')}}" alt="">
        </div>
        <div class="features">
            <div class="row m-0">
                @if(count($featuredposts) > 0)
                    @foreach ($featuredposts as $featuredpost)
                <div class="col-3">
                    <div class="row"><h5><a href="/post/{{$featuredpost->id}}">{{$featuredpost->title}}</a></h5></div>
                    <div class="row picbox"><img src="{{URL::asset('/uploads/postcovers/'. $featuredpost->cover)}}" alt=""></div>
                    <div class="row"><small>Ngày đăng:{{$featuredpost->created_at}}</small>{{$featuredpost->summary}}</div>
                </div>
                @endforeach
                @else
                    Không có bài viết nào!!
                @endif
                <div class="col-3">
                    <div class="row bigbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    <div class="row">
                        <div class="col-4 smallbox"><img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt=""></div>
                        <div class="col-4 smallbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                        <div class="col-4 smallbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        <div class="other">
            <h5>Tin cũ hơn</h5>
            <ul>
                @if(count($listposts) > 0)
                    @foreach ($listposts as $listpost)
                <li><a href="/post/{{$listpost->id}}">{{$listpost->title}}</a></li>
                    @endforeach
                @else
                    Không có bài viết nào!!
                @endif
            </ul>
        </div>
    </div>
    </div>
@endsection
