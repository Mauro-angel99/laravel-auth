@extends('layouts.app')

@section('content')

<header>
    <div class="container">
        <h1>Posts</h1>
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
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post) }}">
                            <button class="btn-primary">Vedi</button>
                        </a>
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