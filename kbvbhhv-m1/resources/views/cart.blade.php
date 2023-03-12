@extends('layouts.app')
@section('content')
    <div class="container">
<link rel="stylesheet" href="../public/style/cart.css">

    <h1 class="d-flex justify-content-center text-light">Корзина</h1>
        <div class="card row align-items-start">
           
            <div class="card-body">

                @foreach($cart_items as $item)
                <div class="row mb-3">
                    <img src="{{url('img/')}}/{{$item->product->img_url}}" class="kol" style="width: 200px; height: 200px;">
                    <div class="col align-self-center">{{$item->product->name}}
                    
                    </div>

                    <div class="btn-group col align-self-center">
                        <form action="{{ route('cartUpadate', $item->id) }}" method="POST">
                            @csrf
                            <div>
                                <h3 class="col align-self-center"> Количество</h3>
                               <button type="submit" name="count" class="btn btn-danger" value="{{ $item->count - 1 }}">-</button>
                                <span>{{ $item->count }}</span>
                                <button type="submit" class="btn btn-success" name="count" value="{{ $item->count + 1 }}">+</button>
                            </div>
                        </form>
                    </div>
                    <div class="col align-self-center">
                    <a  href="{{url('cart/remove')}}/{{$item->id}}" class="btn btn-danger text-light">Удалить</a>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>





@endsection
