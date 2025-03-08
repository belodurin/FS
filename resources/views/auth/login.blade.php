@extends('layout.app')

@section('title', 'Авторизация')

@section('content')
<div class="container">
    <h1>Вход</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Войти</button>
    </form>
    <p>Нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a></p>
</div>
@endsection
