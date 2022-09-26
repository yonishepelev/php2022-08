@extends('layout.main')
@section('content')
    <h1>{{$title}}</h1>
    <div>
        <a href="/categories">Back</a>
    </div>
    <div class="container">
        @foreach($products as $product)
            <div class="pb-4 row">
                <div class="col-5 p-3">
                    <div class="fw-bold fs-4">{{$product->title}}</div>
                    <div>Price: ${{$product->price}}</div>
                    <div>
                        @if($product->stock > 0)
                            {{'in stock'}}
                        @else
                            {{'out of stock'}}
                        @endif
                    </div>
                </div>
                <div class="col p-3">
                    <img width="250px" alt="{{$product->title}}"
                         src="{{$product->thumbnail}}">
                </div>
            </div>
        @endforeach

    </div>
@endsection
