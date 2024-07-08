@extends('layouts.app')

@section('title', 'Create')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
    @endif

    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <p>
            <label for="title">Titolo</label>
        </p>
        <input name="title" type="text" id="title">
        @error('title')
            <div>{{$message}}</div>
        @enderror
        <p>
            <label for="description">Descrizione</label>
        </p>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        @error('description')
            <div>{{$message}}</div>
        @enderror
        <p>
            <label for="price">Prezzo</label>
        </p>
        <input name="price" type="text">
        <br>
        @error('price')
            <div>{{$message}}</div>
        @enderror
        <input type="submit">
    </form>
@endsection
