@extends('layouts.app')

@section('content')

@if (session('message'))
<div class="text-center alert alert-{{ session('type') ?? 'info' }}">
    {{ session('message') }}
</div>
@endif

<header>
    <div class="container d-flex justify-content-between">
        <h1>Posts</h1>
        <a href="{{ route('admin.posts.create') }}">
            <button class="btn-success">Aggiungi post</button>
        </a>
    </div>
</header>
<main>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Modificato il</th>
                    <th scope="col">Opzioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->user->name }}</td>
                    @if($post->category)
                    <td>{{ $post->category->label }}</td>
                    @else
                    <td></td>
                    @endif
                    <td>
                        @forelse($post->tags as $tag)
                        <span>{{ $tag->label }}</span>
                        @empty
                        <span></span>
                        @endforelse
                    </td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td class="d-flex justify-content-around">
                        <a href="{{ route('admin.posts.show', $post) }}">
                            <button class="btn-primary">Vedi</button>
                        </a>
                        <a href="{{ route('admin.posts.edit', $post) }}">
                            <button class="btn-warning">Modifica</button>
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-danger" type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>
                        <h2 class="text-center">Nussun post presente</h2>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

@endsection