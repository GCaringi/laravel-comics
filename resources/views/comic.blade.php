@extends('layouts.template_page')

@section('page-title')
    {{$comic['title']}}
@endsection

@section('main-content')
    @dump($comic)
    <h1>Hello</h1>

    @include('partials.home_merchandise')
@endsection