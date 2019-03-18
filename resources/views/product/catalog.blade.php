@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Notre catalogue</h1>
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Image</th>
                    <th scope="col">Prix unitaire HT</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td style="width:400px"><h4>{{ $product->name }}</h4></td>
                        <td>
                            <a href="{{ url('product/' . $product->id) }}">
                                <img src="{{ asset('images/' . $product->imgURL) }}" alt="{{ $product->name }}" class="imgbasket">
                            </a>
                        </td>
                        <td>{{ $product->price/100 }} €</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="btn-group" role="group">
            <a href="{{ url('product/create') }}" class="btn btn-success">
                <h3>ajouter un produit</h3>
            </a>
        </div>
    </div>
@endsection
