@extends('layouts.app')

@section('title', 'Modifier le cadeau '.$gift->id)

@section('content')
    <h1>Modifier le cadeau</h1>
    <form action="{{ route('gifts.update', $gift->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nom du cadeau *</label>
        <input type="text" name="name" id="name" required value="{{ old('name', $gift->name) }}">
        @error ('name')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="price">Prix *</label>
        <input type="number" name="price" id="price" step="0.01" required value="{{ old('price', $gift->price) }}">
        @error ('price')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="details">Description du cadeau</label>
        <textarea name="details" id="details">{{ old('details', $gift->details) }}</textarea>
        @error ('details')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="url">Url du cadeau</label>
        <input type="text" name="url" id="url" value="{{ old('url', $gift->url) }}">
        @error ('url')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <button type="submit">Mettre à jour le cadeau</button>
    </form>

@endsection