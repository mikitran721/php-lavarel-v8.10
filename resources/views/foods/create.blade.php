@extends('layouts.app')
@section('content')
    <h2>This is page to create new food.</h2>
    <form action="/foods" method="post">
        {{-- not work, bz it related to CSRF - cross site request forgery --}}
        {{-- only apply to non-read routes --}}
        @csrf
        <input type="text" class="form-control" name="name" placeholder="Enter Food's name">
        <input type="text" class="form-control" name="description" placeholder="Enter Food's description">
        <input type="text" class="form-control" name="count" placeholder="Enter Food's count">

        <div>
            <label>Choose a categories:</label>
            <select name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $err)
                <p class="text-danger">
                    {{ $err }}
                </p>
            @endforeach
        </div>
    @endif
    
@endsection