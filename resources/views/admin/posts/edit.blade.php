@extends('layouts.admin')

@section('title', "Редактировать статью ID ($post->id)")

@section('main_content')

    <br>

    <div class="container mx-auto px-6 py-8">

        <h1>{{"Редактировать статью ID ($post->id)"}}</h1>

        <br>

        <div class="mt-8">
            <form enctype="multipart/form-data" method="PUT" action="{{ route('posts.update', $post->id) }}">
                @csrf

                    <input name="title" type="text" placeholder="Название" class="form-control" value="{{ value($post->title) }}"><br>

                    @error('title')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="preview" type="text" placeholder="Кратко" class="form-control" value="{{ value($post->preview) }}"><br>

                    @error('preview')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="description" type="text" placeholder="Описание" class="form-control" value="{{ value($post->description) }}"><br>

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
