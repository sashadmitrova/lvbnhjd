@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="/public/style/admin.css">
<h1 class="d-flex justify-content-center">Админка</h1>
    <h3 class="d-flex justify-content-center">Управление товаром</h3>
    <div class="container">
        <div class="row">
            <a href="{{url('/admin/product')}}" class="btn btn-info justify-content-center">создать товар</a>
        </div>
        @foreach($prod as $obprod)
            <div class="row">
                <div class="col">
                    <h3>{{$obprod->name}}</h3> 
                </div>
                <div class="col">
                    <a href="" class="btn btn-primary ">Редактировать</a>
                   
                </div>
                <div class="col">
                    <a href="{{url('/admin/product/delete/')}}/{{$obprod->id}}" class="btn btn-danger">Удалить</a>
                </div> 

            </div>
        @endforeach


        <div class="container">
            <div class="row">
                <a href="{{url('/admin/cat')}}" class="btn btn-info justify-content-center">создать категорию</a>
            </div>
            @foreach($cat as $obprod)
                <div class="row">
                    <div class="col">
                        <h3>{{$obprod->name}}</h3> 
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-primary ">Редактировать</a>
                       
                    </div>
                    <div class="col">
                        <a href="{{url('/admin/cat/delete/')}}/{{$obprod->id}}" class="btn btn-danger">Удалить</a>
                    </div> 
    
                </div>
            @endforeach
        
        




@endsection
