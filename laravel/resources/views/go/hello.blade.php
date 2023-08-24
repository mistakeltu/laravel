@extends('app')

@section('title', 'Home')

@section('content')
    @if ( 2 == $font)   
    <h1 style="color: {{$color}};">WAZEEEEEEEEEEE</h1>
    @else
    <h1 style="color: {{$color}};">SUPPPPPPPPPPPPPPPPPP</h1>
    @endif
    <ul>
    @foreach ($people as $person)
        <li>{{$person['name']}} {{$person['age']}}</li>
    @endforeach
    </ul>
@endsection