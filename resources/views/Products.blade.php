@extends('template.main')

@section('title', 'Продукты')

@section('main')
    <section class="container ">
        <div>
            <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Создать новый продукт
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление товара</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="*" method="post">
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input name="article" type="text" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">ARTICLE</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Пылесос">
                                    <label for="floatingInput">NAME</label>
                                </div>

                                <span class="mb-3">Характеристики: </span>
                                <div class="form-floating mt-3 mb-3">
                                    <input name="article" type="text" class="form-control" id="floatingInput" placeholder="">
                                    <label for="floatingInput">Color</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Пылесос">
                                    <label for="floatingInput">Size</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Пылесос">
                                    <label for="floatingInput">Material</label>
                                </div>
                                <div class="mb-3 form-check">
                                    <input name="publish" type="checkbox" class="form-check-input" id="publish">
                                    <label class="form-check-label" for="publish">Опубликовать</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-5 justify-content-between flex-wrap">
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
        </div>

    </section>
@endsection
