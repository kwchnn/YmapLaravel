@extends('parent')

@section('container')
    <div class="map-container">
    <form method="POST" action="{{ route('register_method') }}" class="form-style" style="margin: 15% auto">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Зарегистрируйтесь!</h1>
        <label for="inputEmail">Email</label>
        <input type="email" name="email" placeholder="Email адрес" class="form-control" required>
        <label for="inputPassword">Password</label>
        <input type="password" name="password" placeholder="Пароль" class="form-control" required><br>
        <button class="button" type="submit" style="width: 100%">
            Зарегистрируйтесь
    </button>
    <br>
        Зарегистрированы? <a href="{{ route('login') }}"> Войти </a>
    </form>
    </div>
@endsection