@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="bande">
        <div class="container">
            <h1>produit ajouté en bdd</h1>
            {{$product->id}}<br />
            {{$product->name}}<br />
            {{$product->description}}<br />
            {{$product->price}}<br />
            {{$product->weight}}<br />
            {{$product->stock}}<br />
            {{$product->id_cat}}<br />
        </div>
    </div>
@endsection