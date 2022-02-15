@extends('layouts.app')

@section('title')Восстановление пароля@endsection

@section('main_content')

    <br>

    <h1>Авторизация</h1>

    <br>

    <form method="POST" action="forgot_process">
        @csrf

        <input type="text" name="email" id="email" placeholder="Введите email" class="form-control"><br>

        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div>
            <a href="login" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Вспомнил пароль</a>
        </div>

        <br>

        <button type="submit" class="btn btn-success">Войти</button>
    </form>
@endsection
