@extends('layout.main')
@section('paging')
    <div class="container">
        <div>По {{$limit}} товаров</div>
        <form class="row mt-2">
            <select class="form-select w-25 " name="limit">
                @for($i = 10; $i <=40; $i += 10)
                    <option value="{{$i}}" {{$selected = $limit === $i ? 'selected' : ''}}>{{$i}}</option>
                @endfor
            </select>
            <button class="btn btn-primary mx-2 w-auto">Отправить</button>
        </form>
    </div>
    <nav class="mt-3" aria-label="Page navigation example">

        <ul class="pagination">
            @for($i = 1; $i <= $total_pages; $i++)
                @php($active =  $i === (int) $currentPage ? 'active' : '')
                <li class="page-item {{$active}}">
                    <a class="page-link" href="/all-products?page={{$i}}&limit={{$limit}}">{{$i}}</a>
                </li>
            @endfor
        </ul>
    </nav>
@endsection
@section('content')
    <h1>{{$title}}</h1>

    <div class="container">
        <div>
            <a class="btn btn-outline-info" role="button" href="/categories">Back</a>
        </div>
        @yield('paging')
        @foreach($products as $product)
            <div class="pb-4 row">
                <div class="col-5 p-3">
                    <div class="fw-bold fs-4"><a href="/product/{{$product->id}}">{{$product->title}}</a></div>
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
        @yield('paging')

    </div>
@endsection

