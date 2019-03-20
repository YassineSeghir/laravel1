@extends('layout')
@section('title', 'Panier')
@section('content')


    @foreach($product as $product)
    {{$product->name}}<br>
    <img src="{{asset($product->image->imgURL)}}"><br>
    {{$product->price/100}} €<br>


@endsection
