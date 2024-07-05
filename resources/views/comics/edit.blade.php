@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <form method="POST" action="{{ route('comics.update', $book->id)}}">
        @method('PUT')
        @csrf
        <p>
            <label for="title">Titolo</label>
        </p>
        <input name="title" type="text" id="title" value="{{$book['title']}}" required>
        <p>
            <label for="description">Descrizione</label>
        </p>
        <textarea name="description" id="description" cols="30" rows="10" required placeholder="{{$book['description']}}"></textarea>
        <p>
            <label for="price" required></label>
        </p>
        <input name="price" type="text" value="{{$book['price']}}">
        <br>
        <input type="submit">
    </form>
@endsection
