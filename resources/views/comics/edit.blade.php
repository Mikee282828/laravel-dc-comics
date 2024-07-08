@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>
        @endforeach
    @endif
    
    <form method="POST" action="{{ route('comics.update', $book->id)}}">
        @method('PUT')
        @csrf
        <p>
            <label for="title">Titolo</label>
        </p>
        <input name="title" type="text" id="title" value="{{$book['title']}}" >
        @error('title')
            <div>{{$message}}</div>
        @enderror
        <p>
            <label for="description">Descrizione</label>
        </p>
        <textarea name="description" id="description" cols="30" rows="10" >{{$book['description']}}</textarea>
        @error('description')
            <div>{{$message}}</div>
        @enderror
        <p>
            <label for="price" ></label>
        </p>
        <input name="price" type="text" value="{{$book['price']}}">
        @error('price')
            <div>{{$message}}</div>
        @enderror
        <br>
        <input type="submit">
    </form>
@endsection
