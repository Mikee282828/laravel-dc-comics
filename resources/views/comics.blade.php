@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <h1>Questi sono i fumetti disponibili:</h1>
    @foreach ($books as $book)
        <div>
            {{ $book->title }}
        </div>
    @endforeach
@endsection
