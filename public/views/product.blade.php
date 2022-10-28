@extends('layout.main')
@section('content')
    <h1>{{$title}}</h1>
    @if($product)
        <div>
            <a href="/category/{{$product->categoryId}}">Back</a>
        </div>

        <div class="container">
            <div class="fw-bold fs-4">{{$product->title}}</div>
            <div>Price: ${{$product->price}}</div>
            @foreach($product->images as $image)
                <img class="me-4" src="{{$image}}" height="150px" alt="{{$product->title}}">
            @endforeach

        </div>
    @endif

@endsection
