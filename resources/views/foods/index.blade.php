@extends('layouts.app')
@section('content')
    <h2>This is Foods Page.</h2>
    <a href="foods/create" class="btn btn-primary btn-lg" role="button">Create new food</a>

    {{-- <h3>{{ $foods->name }}</h3>
    <h3>{{ $foods->description }}</h3>
    <h3>{{ $foods->count }}</h3> --}}
    <ol>
        @foreach ($foods as $food)
            <h3>{{ $food->name }}</h3>
            <h3>{{ $food->description }}</h3>
            <h3>{{ $food->count }}</h3>
        @endforeach
    </ol>
@endsection