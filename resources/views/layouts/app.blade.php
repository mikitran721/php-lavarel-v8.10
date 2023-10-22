<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages view</title>
</head>
<body>
    <div style="background-color: aqua; height:100px; ">
        <p>This is header.</p>
    </div>
    {{-- app.blade.php is the master page --}}
    {{-- index.blade.php is the child page --}}
    {{-- about.blade.php is the child page --}}
    @yield('content')
    <div style="background-color: salmon; height:100px; ">
        <p>This is Footer.</p>
    </div>
</body>
</html>