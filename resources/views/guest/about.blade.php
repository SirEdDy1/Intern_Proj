@extends('guest.layouts.app')

@push('custom-css')
    <style>
        h1 {
            color: red;
        }
    </style>
@endpush

@section('content')
    <h1>This is about Page</h1>
@endsection