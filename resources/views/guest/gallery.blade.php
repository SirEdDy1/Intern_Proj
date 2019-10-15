@extends('guest.layouts.app')

@push('custom-css')
    <style>
div.gallery {
    border: 1px solid #ccc;
    width: 400px;
    height: 300px;
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 100%;
    height: 100%;
    object-fit: fill;
    object-position: 50% 50%;

}
div.desc {
    padding: 15px;
    text-align: center;
}
    </style>
@endpush

@section('content')

<div class="row">
    @if(count($pictures) > 0)
        @foreach ($pictures as $picture)
            <div class="gallery col-4">
                <a target="_blank">
                    <img src="{{URL::asset('/uploads/gallerypictures/' . $picture->image)}}" alt="">
                </a>
                <div class="desc">{{$picture->title}}</div>
            </div>
        @endforeach
    @else
        <div class="box-body">
            Thư viện ảnh trống!!
        </div>
    @endif
</div>
@endsection
