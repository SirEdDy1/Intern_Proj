@extends('guest.layouts.app')

@push('custom-css')
    <style>
        input{
            background: #999999;
            color: white;
            border: none;
        }
        textarea{
            background: #999999;
            color: white;
            border: none;
        }
        input[type=submit]{
            background: red;
            color: white;
            margin-top: auto;
            margin-left: 19rem;
            margin-bottom: 2rem;
            padding: 0.5rem;
        }
        .font{
            font-size: large;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <div class="container">
        <div class="row">
            <div class="col">
            <form action="{{route('contact.post')}}" method="POST">
                @csrf
                    <h3>Gửi liên hệ</h3>
                    <h5>Trường THPT Trần Phú</h5>
                    Tiêu Đề (bắt buộc)<br>
                    <input type="text" name="name" value="" size="49">
                    <br><br>
                    Địa chỉ email (bắt buộc)<br>
                    <input type="email" name="email" value="" size="49">
                    <br><br>
                    Nội Dung<br>
                    <textarea type="text" name="body" rows="8" cols="50"></textarea>
                    <br><br>
                    <input type="submit" value="Gửi đi!">
                </form>
            </div>
            <div class="col">
                <h4>Thông tin liên hệ</h4><br>
                <p class="font"><i class="material-icons">house</i>Địa chỉ: Số 8 phố Hai Bà Trưng, Hoàn Kiếm</p>
                <p class="font"><i class="material-icons">phone_callback</i>Điện thoại: (+84.4)3825 2544 - 3936 8395</p>
                <p class="font"><i class="material-icons">mail</i>Email: c3tranphu@hanoi.edu.vn</p>
            </div>
        </div>
    </div>
@endsection
