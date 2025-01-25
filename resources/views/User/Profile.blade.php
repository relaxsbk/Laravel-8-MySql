@extends('template.main')

@section('title', 'Продукт')

@section('main')
    <section class="container d-flex gap-5 justify-content-center flex-wrap">


        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title mb-3">Name</h5>
                <h5 class="card-title mb-3">email</h5>
                <h5 class="card-title mb-3">дата регистрации</h5>
                <form action="*" method="post">
                    <button class="btn btn-outline-danger" type="submit">Выход</button>
                </form>

            </div>
        </div>
    </section>
@endsection
