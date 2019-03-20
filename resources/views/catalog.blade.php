@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <style>
        img {
            height: 110px;
            min-width: 90px;
            border-radius: 5px;
            border: solid 1px #000;
        }


    </style>

    <h1>Catalogue</h1>

    @foreach ($products as $product)
        {{$product->name}}<br>
        <img src="{{asset($product->image->imgURL)}}"><br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>
        <a class="btn btn-success btn-lg" href="{{url('product/'.$product->id)}}"role="button">Fiche produit</a><br>
        <br>

    @endforeach

@endsection


