@extends('layouts.app')

@section('content')
        {{-- TODO: Aggiungere le validation e l'"old") --}}

        <h2>Crea un Post</h2>
        <form method="post" action="{{ route('admin.posts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Link immagine</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenuto del post</label>
                <textarea class="form-control" name="content" id="content" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">Anteprima</label>
                <textarea class="form-control" name="excerpt" id="excerpt" rows="3"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Crea Post</button>
            </div>
        </form>
@endsection
