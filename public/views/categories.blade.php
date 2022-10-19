@extends('layout.main')
@section('content')
    <h1>Категории товаров</h1>
    <div>
        <a class="btn btn-outline-info" role="button" href="/all-products">Все товары</a>
        <div class="list-group mt-3">
        @foreach($dbCategories as $category)

           <a role="button" href="http://localhost:8000/category/{{$category->id}}"
              class="list-group-item list-group-item-action">{{$category->title}}</a>
        @endforeach
        </div>
    </div>
@endsection
