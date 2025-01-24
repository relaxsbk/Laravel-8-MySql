@extends('template.main')

@section('title', 'Домашняя страница')

@section('main')
    <section class="container d-flex gap-5 justify-content-between flex-wrap">

        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/nt.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/nt.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/nt.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/nt.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">NAME</h5>
            </div>
        </div>
    </section>
@endsection
