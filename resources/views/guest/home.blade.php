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
    </style>
@endpush

@section('content')
    <div class="main">
        <div class="homepic col-12">
            <img src="{{URL::asset('/pic/TranPhu.jpg')}}" alt="">
        </div>
        <div class="features col-12 row">
            <div class="col row">
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
            </div>
            <div class="col">col</div>

        </div>
    </div>
@endsection