<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Главная</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Список всех продуктов</a>
                    </li>

                </ul>
                <a class="nav-link" href="#">Вход</a>
{{--                <form class="d-flex" role="search">--}}
{{--                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">--}}
{{--                    <button class="btn btn-outline-success" type="submit">Поиск</button>--}}
{{--                </form>--}}
            </div>
        </div>
    </nav>
</header>
