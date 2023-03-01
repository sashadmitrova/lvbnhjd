@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/public/style/katalog.css">
    <h1 class="d-flex justify-content-center">Каталог</h1>
    <div class="btn-group">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Фильтры
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach($cat as $obcat)
                    <li><a class="dropdown-item" href="{{url('/catalog/filter')}}/{{$obcat->id}}">{{$obcat->name}}</a>
                    </li>
                @endforeach
                <li><a class="dropdown-item" href="{{url('/catalog')}}">сборосить фильтр</a></li>
            </ul>
        </div>
               








        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Сортировка
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/id/desc"/>от недавно добавленных к
                    старым</a>
                </li>
                <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/id/asc"/>от старых к недавно добавленым</a>
                </li>
                <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/price/asc"/>от дешевых к дорогим</a>
                </li>
                <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/price/desc"/>от дорогих к дешевым</a>
                </li>
                <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/year_of_production/desc"/>от недавно
                    вышедшим к старым</a>
                </li>
                <li><a class="dropdown-item" href="{{url('/catalog/sort')}}/year_of_production/asc"/>от старых к недавно
                    вышедшим</a>
                </li>
                <li><a class="dropdown-item" href="{{url('/catalog')}}">сборосить фильтр</a></li>
            </ul>
        </div>

    </div>

    <div class="list">
        <div class="row">
            @foreach($prod as $obprod)
                <div class="col-md-2">
                    <div class="card h-90 d-flex" style="width: 12.5rem;">
                        <img src="{{$obprod->img_url}}" class="card-img-top h-70" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$obprod->name}}</h5>
                            <p class="card-text">Цена:{{$obprod->price}}руб</p>
                            <p class="card-text">Год выпуска: {{$obprod->year_of_production}}</p>
                            <a href="{{url('/catalog/product')}}/{{$obprod->id}}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
