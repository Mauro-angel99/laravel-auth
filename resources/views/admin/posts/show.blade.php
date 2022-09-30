@extends('layouts.app')

@section('content')

@if (session('message'))
<div class="text-center alert alert-{{ session('type') ?? 'info' }}">
    {{ session('message') }}
</div>
@endif

<header>
    <div class="container">
        <h1>{{ $post->title }}</h1>
    </div>
</header>
<main>
    <div class="container">
        <img src="{{ $post->image }}" alt="">
        @if($post->category)
        <h5>categoria: {{ $post->category->label }}</h5>
        @else
        <h5>categoria: Nessuna</h5>
        @endif
        <p>{{ $post->content }}</p>
        <hr>
    </div>
</main>
<footer>
    <div class="container d-flex justify-content-between">
        <a href="{{ route('admin.posts.index') }}">
            <button class="btn-secondary">Torna indietro</button>
        </a>
        <div class="d-flex">
            <a href="{{ route('admin.posts.edit', $post) }}">
                <button class="btn-warning">Modifica</button>
            </a>
            <form class="ml-2" action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn-danger" type="submit">Elimina post</button>
            </form>
        </div>
    </div>
</footer>


@endsection