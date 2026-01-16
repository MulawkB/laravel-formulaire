@extends('layouts.app')

@section('title', 'Créer un nouveau cadeau')

@section('content')
    <h1>Créer un nouveau cadeau</h1>
    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf
        <label for="name">Nom du cadeau *</label>
        <input type="text" name="name" id="name" required value="{{ old('name') }}">
        @error ('name')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="price">Prix *</label>
        <input type="number" name="price" id="price" step="0.01" required value="{{ old('price') }}">
        @error ('price')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="details">Description du cadeau</label>
        <textarea name="details" id="details">{{ old('details') }}</textarea>
        @error ('details')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="url">Url du cadeau</label>
        <input type="text" name="url" id="url" value="{{ old('url') }}">
        @error ('url')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <button type="submit">Créer le cadeau</button>
    </form>
@endsection