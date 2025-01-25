@extends('template.main')

@section('title', 'Регистрация')

@section('main')
    <section class="container d-flex flex-column align-items-center">
        <form class="w-50">
            <div class="mb-3">
                <label for="InputName" class="form-label">Ваше ФИО</label>
                <input name="name" type="text" class="form-control" id="InputName"  placeholder="Иван Иванов Иванович">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="InputPassword_conf" class="form-label">Подтвердите пароль</label>
                <input name="password_confirm" type="password" class="form-control" id="InputPassword_conf">
            </div>

            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </form>

    </section>
@endsection
