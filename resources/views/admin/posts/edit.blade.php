@extends('layouts.app')

@section('content')

<header>
    <div class="container d-flex justify-content-between">
        <h1>Modifica post</h1>
    </div>
</header>
<main>
    <div class="container">
        @include('includes.admin.posts.form')
        <hr>
    </div>
</main>
<footer>
    <div class="container d-flex justify-content-between">
        <button class="btn-success" type="submit">Salva</button>
        <a href="{{ route('admin.posts.index') }}">
            <button class="btn-secondary">Torna indietro</button>
        </a>
    </div>
    </form>

</footer>

@endsection