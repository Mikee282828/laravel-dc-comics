@extends('layouts.app')
@section('title','info')

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
</div>
@endsection