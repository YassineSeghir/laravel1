@extends('admin.layoutAdmin')
@section('title','Admin')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Article mis à jour</h2>
                    </div>
                    <div class="panel-body">
                        <h3>Description</h3>
                        <p>{{ $product['description'] }}</p>
                        <h3>Prix</h3>
                        <p>{{ $product['price'] }}</p>
                        <h3>Poids</h3>
                        <p>{{ $product['weight'] }}</p>
                        <h3>Stock</h3>
                        <p>{{ $product['stock'] }}</p>
                        <h3>Categorie</h3>
                        <p>{{ $product['id_category'] }}</p>
                        <h3>Image</h3>
                        <p>{{ $product['id_image'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection