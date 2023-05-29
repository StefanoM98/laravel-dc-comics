@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('comics.index') }}">Torna indietro</a>
        <h3>Il fumetto selezionato è {{ $comics->title }}</h3>
        <img class="w-50" src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
        <p>{!! $comics->description !!}</p>
    </div>
@endsection
