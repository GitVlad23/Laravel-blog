@extends('layouts.admin')

@section('title')Статьи@endsection

@section('main_content')

    <br>

    <a class="btn btn-success p-2 text-black text-decoration-none" href="create">Добавить</a>

    <br>
    <br>

    <div class="alert alert-warning flex-column flex-md-row align-items-center p-3 px-md-4">

        <h3>Заголовок</h3>

            <hr style="border: 1px solid black">

    @foreach($posts as $post)
        <div class="d-flex flex-column flex-md-row align-items-center">
            <h5 class="my-0 mr-md-auto font-weight-normal">{{ $post->title }}</h5>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="p-2 text-black text-decoration-none" href="{{ route('posts.edit', $post->id) }}">Редактировать</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-warning p-2 text-black text-decoration-none">Удалить</button>
                    </form>
                </nav>
        </div>

        <hr style="border: 1px">
    @endforeach
    </div>

@endsection
