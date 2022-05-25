@extends('layouts.app')

@section('title')
    dettaglio fumetto
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="col-12 text-center">{{ $comic->title }}</h1>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <p>{{ $comic->description }}</p>
            <h5>Price: {{ $comic->price }} $</h5>
        </div>
        <a href="{{ route('comics.index') }}">Torna alla lista dei fumetti!</a>
    </div>
@endsection
