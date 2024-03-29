@extends('layouts.app')

@section('title', 'Listagem de Usuários')

@section('content')
    <h1>Listagem de Usuarios (<a href="{{ route('users.create') }}">+</a>)</h1>
    <form action="{{route('users.index')}}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    @foreach ($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            | <a href="{{ route('comments.index', $user->id) }}">Anotações (0)</a>
        </li>
    @endforeach
@endsection
