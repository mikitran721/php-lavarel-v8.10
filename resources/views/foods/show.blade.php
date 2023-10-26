@extends('layouts.app')
@section('content')
    <h2>This is page to show detail a food.</h2>
    <h3>Name: {{ $food->name }}</h3>
    <img width="100px" src="{{ asset('images/'.$food->image_path) }}" alt="{{ $food->name }}">
    <h3>Count: {{ $food->count }}</h3>
    <h3>Description: {{ $food->description }}</h3>
    <h3>Category: {{ $food->category->name }}</h3>
    
@endsection