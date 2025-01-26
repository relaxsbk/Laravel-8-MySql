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

        <div class="card" style="width: 18rem;">
            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://placehold.co/600x400" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
    </section>
@endsection
