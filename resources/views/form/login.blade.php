@extends('parent')

@section('container')
    <div class="map-container">
        <div class="row">
            <div class="col">
    <form method="POST" action="{{ route('auth')}}" class="form-style">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Войти</h1>
        <label for="inputEmail">Email</label>
        <input type="email" name="email" placeholder="Email адрес" class="form-control" required>
        <label for="inputPassword">Password</label>
        <input type="password" name="password" placeholder="Пароль" class="form-control" required><br>
        <button class="button" type="submit" style="width: 100%">
            Войти
    </button>
    <br>
        Не зарегистрированы? <a href="{{ route('register') }}"> Зарегистрироваться </a>
    </form>
            </div>
            <div class="col">
            <div style="margin: 40% auto;">
            <h3> YandexMap - приложение для управление Яндекс Картой. Создание своих собственных меток, удаление и изменение </h3>
        </div>
    </div>
    </div>
@endsection