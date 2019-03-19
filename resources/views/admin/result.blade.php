@extends('admin.layoutAdmin')
@section('title','Admin')
@section('container')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter produit</h2>
        </div>
        <div class="panel-body">
            <h3>Nom du produit</h3>
            <p>valeur : <b>{{ $product['name'] }}</b></p>

            <h3>Description</h3>
            <p>valeur : <b>{{ $product['description'] }}</b></p>

            <h3>Prix</h3>
            <p>valeur : <b>{{ $product['price'] }}</b></p>

            <h3>Poids</h3>
            <p>valeur : <b>{{ $product['weight'] }}</b></p>

            <h3>Stock</h3>
            <p>valeur : <b>{{ $product['stock'] }}</b></p>

            <h3>Categorie</h3>
            <p>valeur : <b>{{ $product['id_cat'] }}</b></p>

            <h3>Categorie</h3>
            <p>valeur : <b>{{ $product['image_id'] }}</b></p>
        </div>
    </div>

@endsection