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
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="Home.jpg">
      <img src="{{URL::asset('/pic/schoolgate.jpg')}}" alt="" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>

@endsection
