@extends('layouts.app')
@section('content')
    <h2>This is about page.</h2>
    {{-- thuc hanh lay du lieu tu controller & tien hanh kiem tra truoc khi view --}}
    {{ $x=1; }}

    {{-- khoi lenh IF-ELSE --}}
    @if($x > 2)
        <h3>2 is less then x</h3>
    @elseif($x<0)
        <h2>X < 10</h2>
    
    @else
        <h3>All conditions are not match.</h3>
    @endif

    {{-- khoi lenh: UNLESS = 'if not' --}}
    @unless (empty($name))
        <h3>Name is not empty.</h3>
        @endunless
        
    @if(!empty($name))
        <h3>Name is not empty2.</h3>
        @endif
        
    @empty($name)
        <h3>Name is empty3.</h3>
    @endempty

    @empty($age)
        <h3>Age is empty.</h3>
    @endempty

    @isset($name)
        <h3>Name has been set.</h3>
    @endisset

    {{-- so sanh co phan bien hoa-thuong --}}
    @switch($name)
        @case('Poo')
            <h3>This is Ms.Poo.</h3>
            @break
        @case('Phoong')
            <h3>This is Mr.Phoong</h3>
            @break
        @default
            <h3>NoName</h3>
    @endswitch

    {{-- vong lap FOR --}}
    @for ($i = 0; $i < 6; $i++)
        <h4>i= {{ $i }}</h4>
    @endfor

    {{-- vong lap FOREACH --}}
    @foreach ($names as $eachName)
        <h3>each name: {{ $eachName }}</h3>        
        @endforeach
        
        {{-- vong FORELSE --}}
    @forelse ($names as $eachName)
        <h3>each name: {{ $eachName }}</h3>        
    @empty
        <h3>The array is empty.</h3>
    @endforelse

    {{-- vong lap DO-WHILE --}}
    {{ $i =0 }}
    @while ($i<10)
        <h3>i = {{ $i }}</h3>
        {{ $i++ }}
    @endwhile
    
@endsection