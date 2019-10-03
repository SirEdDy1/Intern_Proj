@extends('guest.layouts.app')

@push('custom-css')
    <style>
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 360px;
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 100%;
    height: auto;
}
div.desc {
    padding: 15px;
    text-align: center;
}
    </style>
@endpush

@section('content')

<div class="gallery">
    @if(count($pictures) > 0)
    @foreach ($pictures as $picture)
    <a target="_blank">
      <img src="{{URL::asset('/uploads/gallerypictures/' . $picture->image)}}" alt="" width="400" height="300">
    </a>
    <div class="desc">{{$picture->title}}</div>
  </div>
  @endforeach
 @else
 <div class="box-body">
    Thư viện ảnh trống!!
  </div>
    <div class="col"></div>
</div>
@endif
@endsection
