@extends('template.main')

@section('title', 'Домашняя страница')

@section('main')


    <section class="container d-flex gap-5 justify-content-between flex-wrap">
        @foreach($products as $product)
            <a href="{{route('products.show', ['product' => $product->id]) }}" class="card text-decoration-none" style="width: 18rem;">
                <img src="{{$product->mainImage->path}}" class="card-img-top" alt="img">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                </div>
            </a>
        @endforeach
    </section>
@endsection
