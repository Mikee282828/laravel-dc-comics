@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <p>
            <label for="title">Titolo</label>
        </p>
        <input name="title" type="text" id="title">
        <p>
            <label for="description">Descrizione</label>
        </p>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <p>
            <label for="price">Prezzo</label>
        </p>
        <input name="price" type="text">
        <br>
        <input type="submit">
    </form>
@endsection
