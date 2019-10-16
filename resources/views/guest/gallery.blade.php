@extends('guest.layouts.app')

@push('custom-css')
    <style>
div.gallery {
    border: 1px solid #ccc;
    width: 400px;
    height: 300px;
    padding: 1.5rem;
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
.desc {
    text-align: center;
}
.navigation{
    padding-left: 30rem;
    padding-top: 1rem;
    position: relative;
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
                <p class="desc">{{$picture->title}}</p>
            </div>
        @endforeach
    @else
        <div class="box-body">
            Thư viện ảnh trống!!
        </div>
    @endif
</div>
<div class="navigation">
    {{ $pictures->links() }}
</div>
@endsection
