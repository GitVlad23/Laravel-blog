@extends('layouts.admin')

@section('title', "Добавить статью")

@section('main_content')

    <br>

    <div class="container mx-auto px-6 py-8">

        <h1>Добавить статью</h1>

        <br>

        <div class="mt-8">
            <form enctype="multipart/form-data" method="POST" action="{{ route('posts.store') }}">
                @csrf

                <input name="title" type="text" placeholder="Название" class="form-control"><br>

                    @error('title')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                <input name="preview" type="text" placeholder="Кратко" class="form-control"><br>

                    @error('preview')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                <input name="description" type="text" placeholder="Описание" class="form-control"><br>

                    @error('description')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                @if(isset($post) && $post->thumbnail)
                    <div>
                        <img src="/storage/posts/{{ $post->thumbnail }}" width="120" height="120">
                    </div>
                @endif

                <div class="d-flex flex-column flex-md-row align-items-center">
                    <input name="thumbnail" type="file" placeholder="Обложка" class="w-full h-12" /><br><br>

                        @error('thumbnail')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                    <button type="submit" class="btn btn-success">Сохранить</button>
                </div>
            </form>
        </div>
    </div>

@endsection
