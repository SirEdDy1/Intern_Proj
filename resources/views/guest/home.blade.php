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
            width: 80%;
            height: 80%;
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
            width: 100px;
            height: 100px;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }
        .smallbox > img{
            width: 100px;
            height: 100px;
            overflow: hidden;
            justify-content: center;
            align-items: center;
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
                <div class="col-3">
                    <div class="row"><h5>Lorem ipsum dolor sit amet.</h5></div>
                    <div class="row picbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    <div class="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, in.</div>
                </div>
                <div class="col-3">
                    <div class="row"><h5>Lorem ipsum dolor sit amet.</h5></div>
                    <div class="row picbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    <div class="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, in.</div>
                </div>
                <div class="col-3">
                    <div class="row"><h5>Lorem ipsum dolor sit amet.</h5></div>
                    <div class="row picbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    <div class="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, in.</div>
                </div>
                <div class="col-auto">
                    <div class="row bigbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    <div class="row">
                        <div class="col-4 smallbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                        <div class="col-4 smallbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                        <div class="col-4 smallbox"><img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
        <div class="other">
            <h5>Tin tiêu điểm</h5>
            <ul>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, maxime.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat earum doloremque sit ex praesentium recusandae?</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam.</li>
            </ul>
        </div>
    </div>
@endsection
