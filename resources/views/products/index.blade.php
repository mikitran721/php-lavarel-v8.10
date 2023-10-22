<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products view</title>
</head>

<body>
    <h2>Index function of ProductsController.</h2>
    {{-- <h3>Title: {{ $title }}</h3>
    <h4>x = {{ $x }}</h4>
    <h4>y = {{ $y }}</h4>
    <h4>Name: {{ $name }}</h4> --}}

    {{-- @foreach($product as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}
    {{-- <h3>{{ $product }}</h3> --}}
    <a href="{{ route('products') }}">Link to products.</a>
</body>

</html>