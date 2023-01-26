@extends('layouts.app')

@section('content')
        {{-- TODO: Aggiungere le validation e l'"old") --}}

        <h2>Edita un Post</h2>
        <form method="post" action="{{ route('admin.posts.update', ['post' => $post]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Link immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $post->image }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto del post</label>
                <textarea class="form-control" name="content" id="content" rows="10">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Anteprima</label>
                <textarea class="form-control" name="excerpt" id="excerpt" rows="3">{{ $post->excerpt }}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Conferma Modifiche</button>
            </div>
        </form>

        <form action="{{ route('admin.posts.destroy', ['post' => $post]) }}" method="POST" class="text-center p-3">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Elimina</button>
        </form>
@endsection
