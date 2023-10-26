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

            {{-- edit --}}
            <a href="foods/{{ $food->id }}/edit">Edit</a>

            {{-- delete a food --}}
            <form action="/foods/{{ $food->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endforeach
    </ol>
@endsection