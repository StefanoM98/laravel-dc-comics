@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Aggiorna il fumetto</h2>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Scrivi la descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Metti l'url dell'immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo di listino</label>
                <input type="price" class="form-control" id="price" name="price"
                    value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Inserisci la serie di appartenenza</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ old('series', $comic->series) }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci la data di inizio vendite</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label for="type">Tipo di fumetto</label>
                <select class="form-select" name="type" id="type">
                    <option selected>Scegli il tipo di fumetto</option>
                    <option value="comic_book" @selected(old('type', $comic->type) === 'comic_book')>Comic Book</option>
                    <option value="graphic_novel" @selected(old('type', $comic->type) === 'graphoc_novel')>Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
