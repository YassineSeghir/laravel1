@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <style>
        img {
            height: 110px;
            min-width: 90px;
            border-radius: 5px;
            border: solid 1px #000;

    </style>

    <h1>Catalogue</h1>

    @foreach($catalog as $catalog)

        {{$catalog->NAME}}<br>
        <img src=" {{asset($catalog->NAME_IMG)}}" >
        {{$catalog->DESCRIPTION}}<br>
        {{$catalog->PRICE}}€<br>
        <br>

    @endforeach

@endsection


