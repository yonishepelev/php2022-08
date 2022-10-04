@extends('layout.main')
@section('content')
    <h1>Категории товаров</h1>
    <div>
        <a class="btn btn-outline-info" role="button" href="/all-products">Все товары</a>
        <div class="list-group mt-3">
        @foreach($arrayAllCategories as $categoryName)
           <a role="button" href="http://localhost:8000/category/{{$categoryName}}"
              class="list-group-item list-group-item-action">{{$categoryName}}</a>
        @endforeach
        </div>
    </div>
@endsection
