@extends('layouts.app')

@section('content')



<h1 class="d-flex justify-content-center">Админка</h1>
    <h3 class="d-flex justify-content-center">Управление товаром</h3>
    <div class="container">
        <div class="row">
            <a href="" class="btn btn-info justify-content-center">создать товар</a>
        </div>
        @foreach($prod as $obprod)
            <div class="row">
                <div class="col">
                    <h3>{{$obprod->name}}</h3>  <!-- тут назавние товара выводится из базы данных-->
                </div>
                <div class="col">
                    <a href="" class="btn btn-primary ">Редактировать</a>
                    <!-- это кнопка отвечает за редактирования товара -->
                </div>
                <div class="col">
                    <a href="{{url('/admin/product/delete/')}}/{{$obprod->id}}" class="btn btn-danger">Удалить</a>
                </div> <!-- это кнопка отвечает за удаление товара из базы данных -->

            </div>
        @endforeach

@endsection