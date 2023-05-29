@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>I nostri comics</h2>
        <div class="my2 text-end">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea un nuovo fumetto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection