@extends('layout')
@section('title', 'Catalogue')
@section('content')
<style>
    img {

        height: 110px;

        min-width: 90px;

        border-radius: 5px;

        border: solid 1px #000;

    }</style>
    <h1>Catalogue</h1>
    @foreach($articleBasket as $produit)
        {{$produit['title']}}<br>
        {{$produit['description']}}<br>
        <img src="{{$produit['image']}}" ><br>
        {{$produit['price']}}<br>
        <br>
    @endforeach
@endsection
