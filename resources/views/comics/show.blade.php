@extends('layouts.app')
@section('title','Show')

@section('content')
<div>
    <div class="title">
        Title : {{$books->title}}
    </div>
    <div class="description">
        Description : {{ $books->description }}
    </div>
    <div class="price">
        Price : {{$books->price}}
    </div>
    <div>
        <a href="{{ route('comics.edit',$books->id)}}">edit</a>
    </div>
</div>
@endsection