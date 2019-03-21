@extends('layout')
@section('title', 'Panier')
@section('content')
    @if($data)
        @foreach($data as $product)
            {{ $product->name }}<br>
            <img src="{{ asset($product->image->imgURL) }}" alt="{{ $product->name }}" height="100">
            {{ number_format($product->price/100,2) }} €<br>
            <br>
        @endforeach
    @else
        <h3>Panier vide</h3>
    @endif
@endsection