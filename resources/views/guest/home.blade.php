@extends('guest.layouts.app')

@push('custom-css')
    <style>
        .homepic{
            margin: auto;
            width: 80vw;
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 25rem;
            overflow: hidden;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .homepic > img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .picbox{
            width: 15.265rem;
            height: 9.375rem;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }
        .picbox > a > img{
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
            width: 18.75rem;
            height: 12.5rem;
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
                            <div class="row"><h6><a href="/post/{{$featuredpost->id}}">{{$featuredpost->title}}</a></h6></div>
                            <div class="row picbox"><a href="/post/{{$featuredpost->id}}"><img src="{{URL::asset('/uploads/postcovers/'. $featuredpost->cover)}}" alt=""></a></div>
                            <div class="row"><small>Ngày đăng:{{$featuredpost->created_at}}</small>{{$featuredpost->summary}}</div>
                        </div>
                    @endforeach
                @else
                    Không có bài viết nào!!
                @endif
                <div class="col-3 carouselgallery">
                    <h6>Ảnh nổi bật</h6>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        @if(count($carouselitems) >0)
                            <div class="carousel-inner">
                                @foreach($carouselitems as $index=>$carouselitem)
                                    {{-- Only loop the item, not the inner container. Also set the active
                                        state to the first one as default, JS from bootstrap will replace it later --}}
                                    <div class="carousel-item {{$index == 0 ? 'active' : ''}}">
                                        <img class="d-block w-100" src="{{URL::asset('/uploads/gallerypictures/' . $carouselitem->image)}}" alt="First slide">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            Không có ảnh
                        @endif
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
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
