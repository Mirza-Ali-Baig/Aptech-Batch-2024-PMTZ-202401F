@extends('layout.master')

@section('my-content')
    <h1 class="text-3xl text-center my-4">Home Page</h1>
@endsection

{{--@section('title')--}}
{{--    Home Page--}}
{{--@endsection--}}

@section('title')
    Home Page | Master Layout
@endsection


@push('css')
    <style>
        h1{
            color: green;
        }
    </style>
@endpush

@push('css')
    <style>
        h1{
            color: red;
        }
    </style>
@endpush

@push('js')
    <script src="script.js"></script>
@endpush
