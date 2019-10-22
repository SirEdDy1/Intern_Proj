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
                <h4>Giới thiệu</h4>
                <ul>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                </ul>
                <h4>Văn bản</h4>
                <ul>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
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
                    <p>{{$post->content}}</p>
                </div>
            </div>
            <div class="col">
                <h4>Liên hệ</h4>
                <ul>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                    <li><i class="material-icons">menu_book</i>Lorem ipsum dolor sit amet.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
