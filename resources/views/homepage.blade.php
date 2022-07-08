@extends('layouts.template_page')

@section('page-title')
    DC Comics    
@endsection

@section('main-content')
    @dump($comics)
    <div class= "bg-[color:var(--clr-secondary)]">
        <div class= "w-[var(--container)] m-auto">
            <div class= "w-[10%] uppercase bg-[color:var(--clr-primary)] text-white font-bold text-center">
                load more
            </div>
            <div class="grid grid-cols-6">
                @foreach ($comics as $comic)
                <div>
                    <img src="{{$comic['thumb']}}" alt="">
                    <h4 class="text-white">{{$comic['series']}}</h4> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
