@extends('template.main')

@section('title', 'Продукты')

@section('main')
    <section class="container ">
        @if(auth()->check() && auth()->user()->isAdmin())
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
                            <form action="{{route('products.store')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <input name="article" value="{{old('article')}}" type="text" class="form-control @error('article') is-invalid @enderror" id="floatingInput" placeholder="">
                                        <label for="floatingInput">ARTICLE</label>
                                        @error('article')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-floating mb-3">
                                        <input name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Пылесос">
                                        <label for="floatingInput">NAME</label>
                                          @error('name')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <span class="mb-3">Характеристики: </span>
                                    <div class="form-floating mt-3 mb-3">
                                        <input name="data[color]" value="{{old('data[color]')}}" type="text" class="form-control @error('data[color]') is-invalid @enderror" id="floatingInput" placeholder="">
                                        <label for="floatingInput">Color</label>
                                          @error('data[color]')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="data[size]" value="{{old('data[size]')}}" type="text" class="form-control @error('data[size]') is-invalid @enderror" id="floatingInput" placeholder="Пылесос">
                                        <label for="floatingInput">Size</label>
                                          @error('data[size]')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input name="data[material]" value="{{old('data[material]')}}" type="text" class="form-control @error('data[material]') is-invalid @enderror" id="floatingInput" placeholder="Пылесос">
                                        <label for="floatingInput">Material</label>
                                          @error('data[material]')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input name="publish" type="checkbox" class="form-check-input" id="publish">
                                        <label class="form-check-label" for="publish">Опубликовать</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        @endif


            <section class="container d-flex gap-4 justify-content-between flex-wrap mb-3">
                @foreach($products as $product)
                    <a href="{{route('products.show', ['product' => $product->id]) }}" class="card text-decoration-none" style="width: 18rem;">
                        <img src="{{$product->mainImage->path}}" class="card-img-top" alt="img">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                        </div>
                    </a>
                @endforeach

            </section>

    </section>

    <div class="container px-4">
        {{ $products->links('pagination::bootstrap-4')  }}
    </div>
@endsection
