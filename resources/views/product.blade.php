@extends('layout')
@section('title', 'Produit')
@section('content')

        @unless(Auth::check($id))

        {{$product->name}}<br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>
        <br>
        @endunless





@endsection