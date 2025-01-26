@extends('template.main')

@section('title', 'Домашняя страница')

@section('main')

    @if(session()->has('success'))
        <div class="alert alert-success container" role="alert">
            {{session()->get('success')}}
        </div>
    @endif

    @if(session()->has('invalid'))
        <div class="alert alert-danger container" role="alert">
            {{session()->get('invalid')}}
        </div>
    @endif


    <section class="container d-flex gap-5 justify-content-between flex-wrap">
        @foreach($products as $product)
            <a href="{{route('product')}}" class="card text-decoration-none" style="width: 18rem;">
                <img src="https://placehold.co/600x400" class="card-img-top" alt="img">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                </div>
            </a>
        @endforeach
    </section>
@endsection
