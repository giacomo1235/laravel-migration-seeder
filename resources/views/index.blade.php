@extends('templates.base')

@section('title', 'homepage')

@section('main')
    <ul>
        @foreach ($trainsList as $train)
            <li> 
                <p>{{$train->stazione_di_partenza}}</p>
                <p>{{$train->stazione_di_arrivo}}</p>
                <p>{{$train->orario_di_partenza}}</p>
            </li>
        @endforeach
    </ul>
@endsection