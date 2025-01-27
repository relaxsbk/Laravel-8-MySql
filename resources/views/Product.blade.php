@extends('template.main')

@section('title', 'Продукт')

@section('main')
    <section class="container d-flex gap-5 justify-content-between flex-wrap">

        <div>
            <img src="{{$product->mainImage->path}}" alt="img">
        </div>

        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->article}} - <span class="text-secondary">article</span></h5>
                <h5 class="card-title">{{$product->name}} - <span class="text-secondary">name</span></h5>
                @if($product->data)
                    <p class="text-secondary "> Характеристика:</p>
                    <ul>
                        @foreach($product->data as $data => $key)
                            <li>{{$data}} - {{$key}}</li>
                        @endforeach


                    </ul>
                @else
                    <p class="text-secondary mt-3"> Характеристики скоро будут</p>
                @endif

                @if(auth()->check() && auth()->user()->isAdmin())
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Изменить
                    </button>
                    <form action="{{route('products.destroy', ['product' => $product->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Удалить</button>
                    </form>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Изменение товара</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('products.update', ['product' => $product])}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input name="article" value="{{$product->article}}" type="text" class="form-control @error('article') is-invalid @enderror" id="floatingInput" placeholder="">
                                            <label for="floatingInput">ARTICLE</label>
                                            @error('article')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>

                                        <div class="form-floating mb-3">
                                            <input name="name" value="{{$product->name}}" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Пылесос">
                                            <label for="floatingInput">NAME</label>
                                            @error('name')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <span class="mb-3">Характеристики: </span>

                                            @foreach($product->data as $data => $key)
                                            <div class="form-floating mt-3 mb-3">
                                                <input name="data[{{$data}}]" value="{{$key}}" type="text" class="form-control @error(`data[$data]`) is-invalid @enderror" id="floatingInput" placeholder="">
                                                <label for="floatingInput">{{$data}}</label>
                                                @error(`data[$data]`)
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            @endforeach



                                        <div class="mb-3 form-check">
                                            <input name="publish" type="checkbox" class="form-check-input" id="publish">
                                            <label class="form-check-label" for="publish">Опубликовать</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif




            </div>
        </div>
    </section>
@endsection
