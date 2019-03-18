@extends('layout')
@section('title', 'Produit mis à jour')
@section('content')
    <div class="bande">
        <div class="container">
            <h2>produit modifié en bdd</h2>
            <p>{{ 'id produit : ' . $product->id }}</p>
            <p><em>{{ 'nom : ' . $product->name }}</em></p>
            <p>{{ 'description : ' . $product->description }}</p>
            <p><em>{{ 'prix : ' . $product->price/100 . '€' }}</em></p>
            <p>{{ 'poids : ' . $product->weight/1000 . 'kg' }}</p>
            <p>{{ 'quantité en stock : ' . $product->stock }}</p>
            <p>{{ 'catégory de produit : ' . $product->id_cat }}</p>

            <div class="btn-group" role="group">
                <a href="{{ url('product/' . $product->id) }}" class="btn btn-primary">
                    <h3>afficher la fiche produit</h3>
                </a>
                <a href="{{ url('product/create') }}" class="btn btn-success">
                    <h3>ajouter un produit</h3>
                </a>
                <a href="{{ url('product/edit') }}" class="btn btn-success">
                    <h3>modifier un produit</h3>
                </a>
            </div>

        </div>
    </div>
@endsection