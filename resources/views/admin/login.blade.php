@extends('layouts.app')

@section('title')Авторизация@endsection

@section('main_content')

    <br>

    <h1>Авторизация</h1>

    <br>

    <form method="POST" action="login_process">
        @csrf

        <input type="text" name="email" id="email" placeholder="Введите email" class="form-control"><br>

        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control"><br>

        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <br>

        <button type="submit" class="btn btn-success">Войти</button>
    </form>

@endsection
