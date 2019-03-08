@extends('layout')
@section('title', 'Produit')
@section('content')


        {{$product->name}}<br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>
        <br>

@endsection