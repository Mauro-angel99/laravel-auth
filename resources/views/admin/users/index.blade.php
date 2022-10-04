@extends('layouts.app')

@section('content')

<header>
    <div class="container">
        <h1>Info Utente</h1>
    </div>
</header>
<main>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nome e cognome</th>
                    <th scope="col">Numero di telefono</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Anno di nascita</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->userDetail->first_name }} {{ $user->userDetail->last_name }}</td>
                    <td>{{ $user->userDetail->phone }}</td>
                    <td>{{ $user->userDetail->address }}</td>
                    <td>{{ $user->userDetail->birthyear }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection