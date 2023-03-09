
@extends('layouts.app')

@section('content')

<h1>Корзина</h1>

<div>
    @foreach ($p as $j)

            <div class="catalog-item">
                <img src="{{$j->products->img}}" alt="*">
                <p class="catalog-item-name">{{ $j->products->name}}</p>
                <p class="catalog-item-price">{{ $j->products->price}}</p>
                    <button type="submit" class="btn btn-primary"><a class="nav-link" href="/public/basket/{{$j->id}}/delete"> Удалить</a></button>
            </div>
                        @endforeach

</div>

@endsection
