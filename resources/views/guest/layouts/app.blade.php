@extends('master')

@push('custom-css')
    <style>
        .container2{
            background:#343A40;
            color:white;
            width: 100%;

        }
        .info{
            padding-right: 10rem;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
    </style>
@endpush

@section('navbar')
    @include('guest.inc.navbar')
@endsection

@yield('body-content')

@section('footer')
    <div class="container2 row m-0">
        <div class="col"></div>
        <div class="info col-auto">
            <h5>THPT Trần Phú</h5>
            <p>Địa chỉ: Số 8 phố Hai Bà Trưng, Hoàn Kiếm, Hà Nội <br>
                Email: c3tranphu@hanoi.edu.vn <br>
                Điện thoại: (+84.4)3825 2544 - 3936 8395</p>
        </div>

    </div>
@endsection