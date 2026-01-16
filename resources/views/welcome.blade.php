@extends('layouts.app')

@section('title', '')

@section('content')
    <h1>Liste des cadeaux</h1>
    <a href="{{ route('gifts.create') }}">Créer un nouveau cadeau</a>
    @forelse ($gifts as $gift)
        <article>
            <h2>{{ $gift->name }}</h2>
            <p>{{ $gift->price }} €</p>
            <a href="{{ route('gifts.show', $gift->id) }}">Voir les détails</a>
            <a href="{{ route('gifts.edit', $gift->id) }}">Modifier</a>
            <form action="{{ route('gifts.destroy', $gift->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </article>
    @empty
        <p>Aucun cadeau disponible.</p>
    @endforelse
@endsection