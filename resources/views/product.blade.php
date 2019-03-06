@extends('layout')
@section('title', 'Produit')
@section('content')

        {{$product->NAME}}<br>
        {{$product->DESCRIPTION}}<br>
        {{$product->PRICE}}€<br>
        <br>

@endsection