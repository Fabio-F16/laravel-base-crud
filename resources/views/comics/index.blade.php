@extends('layouts.app')

@section('title')
    laravel-base-crud
@endsection

<a href="{{ route('comics.create') }}">Add new record</a>

@section('content')
    <div class="container">
        <div class="row">
            @forelse ($comics as $item)
                <div class="card col-12 col-md-4">
                    <img src="{{ $item->thumb }}" alt="{{ $item->title }}">
                    <h3> <a href="{{ route('comics.show', $item->id) }}">{{ $item->title }}</a></h3>
                    {{-- <p>{{ $item->description }}</p> --}}
                    <p>Price: {{ $item->price }} $</p>
                    <p>Sales: {{ $item->sale_date }}</p>
                </div>

            @empty
                <h1>Non ci sono fumetti disponibili</h1>
            @endforelse
        </div>
    </div>
@endsection
