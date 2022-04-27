@extends('layouts.app')

@section('title', "Comentários do Usuário {$user->name}")

@section('content')
    <h1>Comentários do Usuário {{$user->name}} (<a href="{{ route('users.create') }}">+</a>)</h1>
    <form action="{{route('users.index')}}" method="GET">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    @foreach ($comments as $comment)
        <li>
            {{ $comment->body }} -
            {{ $comment->visible }}
            | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
        </li>
    @endforeach
@endsection
