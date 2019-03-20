@extends('layout')
@section('title', 'Panier')
@section('content')
    <style>
        img {
            height: 110px;
            min-width: 90px;
            border-radius: 5px;
            border: solid 1px #000;
        }


    </style>
{{--@dump($data)--}}
    @foreach($data as $product)

    {{$product->name}}<br>
    <img src="{{asset($product->image->imgURL)}}"><br>
    {{$product->price/100}} €<br>
        <br>
    @endforeach

@endsection
