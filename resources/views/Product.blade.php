@extends('template.main')

@section('title', 'Продукт')

@section('main')
    <section class="container d-flex gap-5 justify-content-between flex-wrap">

        <div>
            <img src="https://placehold.co/600x400" alt="img">
        </div>

        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title">Name</h5>
                <ul>
                    <li>Color - black</li>
                    <li>Color - black</li>
                    <li>Color - black</li>
                </ul>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Изменить
                </button>
                <button type="button" class="btn btn-outline-danger">Удалить</button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Редактирование товара</h5>
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
                                    <button type="button" class="btn btn-primary">Сохранить изменения</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
