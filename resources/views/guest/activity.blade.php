@extends('guest.layouts.app')

@push('custom-css')
    <style>
        h1 {
            color: red;
        }
    </style>
@endpush

@section('content')
    <h1>This is activity Page</h1>
@endsection