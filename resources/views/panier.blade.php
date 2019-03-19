@extends('layout')
@section('title', 'Panier')
@section('content')

    {{$product->name}}<br>
    <img src="{{asset($product->image->imgURL)}}"><br>
    {{$product->price/100}} €<br>
@endsection
