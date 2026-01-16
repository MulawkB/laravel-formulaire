@extends('layouts.app')

@section('title', $gift->name)

@section('content')
    <h1>{{ $gift->name }}</h1>
    <p>{{ $gift->price }} €</p>
    @if ($gift->details)
        <p>{{ $gift->details }}</p>
    @endif
    @if ($gift->url)
        <p><a href="{{ $gift->url }}" target="_blank"></a>{{ $gift->url }}</a></p>
    @endif
@endsection