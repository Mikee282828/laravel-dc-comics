@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <h1>Questi sono i fumetti disponibili:</h1>
    @foreach ($books as $index => $book)
        <div>
            <a href="{{ route('comics.show',$index+1)}}">{{ $book->title }}</a>
        </div>
    @endforeach
@endsection
