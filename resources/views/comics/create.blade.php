@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crea il nuovo fumetto</h2>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" @error('title') is-invalid @enderror
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Scrivi la descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                    @error('description') is-invalid @enderror value="{{ old('title') }}">
                </textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Metti l'url dell'immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb"
                    @error('thumb') is-invalid @enderror value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo di listino</label>
                <input type="price" class="form-control" id="price" name="price"
                    @error('price') is-invalid @enderror value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Inserisci la serie di appartenenza</label>
                <input type="text" class="form-control" id="series" name="series"
                    @error('series') is-invalid @enderror value="{{ old('series') }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci la data di inizio vendite</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date"
                    @error('sale_date') is-invalid @enderror value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type">Tipo di fumetto</label>
                <select class="form-select" name="type" id="type">
                    <option selected>Scegli il tipo di fumetto</option>
                    <option value="comic_book" @selected(old('type'))>Comic Book</option>
                    <option value="graphic_novel" @selected(old('type'))>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
