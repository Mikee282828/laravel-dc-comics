@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form action="">
        <p>
            <label for="title">Titolo</label>
        </p>
        <input type="text" id="title">
        <p>
            <label for="description">Descrizione</label>
        </p>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <p>
            <label for="price">Prezzo</label>
        </p>
        <input type="text">
        <br>
        <input type="submit">
    </form>
@endsection
