@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <h1>Catalogue</h1>
    @foreach($articleBasket as $produit)
        {{$produit['title']}}<br>
        {{$produit['description']}}<br>
        <img src="{{$produit['image']}}"><br>
        {{$produit['price']}}<br>
        <br>
    @endforeach
@endsection
