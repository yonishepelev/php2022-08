@extends('layout.main')
@section('content')
    <h1>Категории товаров</h1>
    <div>
        <div class="list-group">
        @foreach($arrayAllCategories as $categoryName)
           <a href="http://localhost:8000/category/{{$categoryName}}" class="list-group-item list-group-item-action">{{$categoryName}}</a>
        @endforeach
        </div>
    </div>
@endsection
