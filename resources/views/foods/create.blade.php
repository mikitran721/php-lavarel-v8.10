@extends('layouts.app')
@section('content')
    <h2>This is page to create new food.</h2>
    <form action="foods" method="POST">
        <input type="text" class="form-control" name="name" placeholder="Enter Food's name">
        <input type="text" class="form-control" name="description" placeholder="Enter Food's description">
        <input type="text" class="form-control" name="count" placeholder="Enter Food's count">

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    
@endsection