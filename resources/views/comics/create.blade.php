@extends('layouts.app')

@section('title')
    create, add new record
@endsection



@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h1>Inserisci un nuovo fumetto!!</h1>
            </div>
            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label class="col-4" for="title">Titolo:</label>
                    <input class="col-4" type="text" name="title">
                </div>

                <div class="mb-3">
                    <label class="col-4" for="description">Descrizione:</label>
                    <textarea class="col-4" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label class="col-4" for="thumb">Link immagine:</label>
                    <input class="col-4" type="text" name="thumb">
                </div>

                <div class="mb-3">
                    <label class="col-4" for="price">Prezzo:</label>
                    <input class="col-4" type="text" name="price">
                </div>

                <div class="mb-3">
                    <label class="col-4" for="series">Serie:</label>
                    <input class="col-4" type="text" name="series">
                </div>

                <div class="mb-3">
                    <label class="col-4" for="sale_date">Data uscita:</label>
                    <input class="col-4" type="date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label class="col-4" for="type">Tipo:</label>
                    <input class="col-4" type="text" name="type">
                </div>

                <input class="mb-4" type="submit" value="Invia">
            </form>

        </div>
        <a class="m-4" href="{{ route('comics.index') }}">Torna alla lista dei fumetti!</a>
    </div>
@endsection
