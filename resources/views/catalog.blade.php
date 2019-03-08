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

    @foreach ($product as $products)
        {{$products->name}}<br>
        {{$products->description}}<br>
        {{$products->price/100}} €<br>

        <br>

    @endforeach

@endsection


