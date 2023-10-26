@extends('layouts.app')
@section('content')
    <h2>This is page to edit a food.</h2>
    <form action="/foods/{{ $food->id }}" method="post">
        {{-- not work, bz it related to CSRF - cross site request forgery --}}
        {{-- only apply to non-read routes --}}
        @csrf
        @method('PUT')
        <input value="{{ $food->name }}" type="text" class="form-control" name="name" placeholder="Enter Food's name">
        <input value="{{ $food->description }}" type="text" class="form-control" name="description" placeholder="Enter Food's description">
        <input value="{{ $food->count }}" type="text" class="form-control" name="count" placeholder="Enter Food's count">

        <button class="btn btn-primary" type="submit">Update food</button>
    </form>
    
@endsection