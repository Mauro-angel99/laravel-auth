@extends('layouts.app')

@section('content')

<header>
    <div class="container">
        <h1>{{ $post->title }}</h1>
    </div>
</header>
<main>
    <div class="container">
        <img src="{{ $post->image }}" alt="">
        <p>{{ $post->content }}</p>
        <hr>
    </div>
</main>
<footer>
    <div class="container">
        <a href="{{ route('admin.posts.index') }}">
            <button class="btn-secondary">Torna indietro</button>
        </a>
    </div>
</footer>


@endsection