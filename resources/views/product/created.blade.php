@extends('layout')
@section('title', 'Produit ajouté')
@section('content')
    <div class="bande">
        <div class="container">
            <h2>produit ajouté en bdd</h2>
            <p>{{ 'id produit : ' . $product->id }}</p>
            <p>{{ 'nom : ' . $product->name }}</p>
            <p>{{ 'description : ' . $product->description }}</p>
            <p>{{ 'prix : ' . $product->price/100 . '€' }}</p>
            <p>{{ 'poids : ' . $product->weight/1000 . 'kg' }}</p>
            <p>{{ 'quantité en stock : ' . $product->stock }}</p>
            <p>{{ 'catégory de produit : ' . $product->id_cat }}</p>

            <div class="btn-group" role="group">
                <a href="{{ url('product/' . $product->id) }}" class="btn btn-success">
                    <h3>afficher la fiche produit</h3>
                </a>
                <a href="{{ url('product/create') }}" class="btn btn-primary">
                    <h3>ajouter un produit</h3>
                </a>
            </div>

        </div>
    </div>
@endsection