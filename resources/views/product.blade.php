@extends('layout')
@section('title', 'Produit')
@section('content')
        <style>
                img {
                        height:310px;
                        min-width: 100px;
                        border-radius: 5px;
                        border: solid 1px #000;
                }


        </style>

        {{$product->name}}<br>
        <img src="{{asset($product->image->imgURL)}}"><br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>

        <br>

        <form action="{{ route('basket') }}" method="post">
                @method ('PUT')
                @csrf

                <input name="id" type="hidden" value="{{ $product->id }}">
                <button type="submit" class="btn btn-success btn-lg">Ajouter au panier</button>
        </form>


@endsection