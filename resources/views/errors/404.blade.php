@extends('template.main')

@section('title', 'Домашняя страница')

@section('main')


    <section class="container">
        <p class="h1">Упс что-то пошло не так...</p>

        <a class="h2 text-decoration-none text-primary" href="{{route('home')}}">Домой</a>
    </section>
@endsection
