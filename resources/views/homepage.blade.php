@extends('layouts.template_page')

@section('page-title')
    DC Comics    
@endsection

@section('main-content')

    <div class= "bg-[color:var(--clr-secondary)]">
        <div class= "w-[var(--container)] m-auto py-4">
            <div class= "w-fit uppercase bg-[color:var(--clr-primary)] text-white font-bold text-center py-2 px-8 relative -top-8">
                Current series
            </div>
            <div class="grid grid-cols-6 gap-8 py-16">
                @foreach ($comics as $comic)
                <div class= "text-center uppercase">
                    <img class = "aspect-square" src="{{$comic['thumb']}}" alt="">
                    <h4 class="text-white font-bold">{{$comic['series']}}</h4> 
                </div>
                @endforeach
            </div>
            <div class="text-center ">
                <button class="text-white uppercase font-semibold bg-[color:var(--clr-primary)] px-12 py-2">load more</button>
            </div>
        </div>
    </div>

    <div class= "bg-[color:var(--clr-primary)]">
        <div class="w-[var(--container)] m-auto py-16">
            <ul class="w-full flex text-white justify-around">
                <li class="flex items-center gap-x-4">
                    <img class="h-[40%]" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <h6 class= "uppercase">Digital Comics</h6>
                </li>
                <li class="flex items-center gap-x-4">
                    <img class="h-[40%]" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <h6 class = "uppercase">DC Merchandise</h6>
                </li>
                <li class="flex items-center gap-x-4">
                    <img class="h-[40%]" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <h6 class = "uppercase">Subscription</h6>
                </li>
                <li class="flex items-center gap-x-4">
                    <img class="h-[40%]" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <h6 class = "uppercase">Comic Shop Locator</h6>
                </li>
                <li class="flex items-center gap-x-4">
                    <img class="w-[50px] h-[40%]" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <h6 class = "uppercase">DC Power Visa</h6>
                </li>
 
            </ul>
        </div>
    </div>
@endsection
