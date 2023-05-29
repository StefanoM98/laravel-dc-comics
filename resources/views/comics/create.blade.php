@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crea il nuovo fumetto</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Scrivi la descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Metti l'url dell'immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo di listino</label>
                <input type="price" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Inserisci la serie di appartenenza</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci la data di inizio vendite</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type">Tipo di fumetto</label>
                <select class="form-select" name="type" id="type">
                    <option selected>Scegli il tipo di fumetto</option>
                    <option value="comic_book">Comic Book</option>
                    <option value="graphic_novel">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
