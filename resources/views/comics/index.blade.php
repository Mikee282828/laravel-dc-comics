@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <h1>Questi sono i fumetti disponibili:</h1>
    <ul>
        @foreach ($books as $index => $book)
            <li>
                <a href="{{ route('comics.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>

@endsection
