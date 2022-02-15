@extends('layouts.app')

@section('title')Регистрация@endsection

@section('main_content')

    <br>

    <h1>Регистрация</h1>

    <br>

    <form method="POST" action="register_process">
        @csrf

        <input type="text" name="name" id="name" placeholder="Имя" class="form-control"><br>

        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <input type="text" name="email" id="email" placeholder="Email" class="form-control"><br>

        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <input type="password" name="password" id="password" placeholder="Пароль" class="form-control"><br>

        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <input type="password" name="password_confirmation" id="password" placeholder="Подтвердите пароль" class="form-control"><br>

        @error('password_confirmation')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <div>
            <a href="/auth/login" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Есть аккаунт?</a>
        </div>

        <br>

        <button type="submit" class="btn btn-success">Войти</button>
    </form>

@endsection
