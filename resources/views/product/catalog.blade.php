@extends('layout')
@section('title', 'Catalogue')
@section('content')
<<<<<<< HEAD:resources/views/product/catalog.blade.php
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
=======
    <style>
        img {
            height: 110px;
            min-width: 90px;
            border-radius: 5px;
            border: solid 1px #000;
        }


    </style>

    <h1>Catalogue</h1>

    @foreach ($products as $product)
        {{$product->name}}<br>
        <img src="{{asset($product->image->imgURL)}}"><br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>
        <a class="btn btn-success btn-lg" href="{{url('product/'.$product->id)}}"role="button">Fiche produit</a><br>
        <br>

    @endforeach
    {{--<a class="btn btn-success btn-lg" href="{{url('admin/productcreate')}}"role="button">Ajouter produit</a><br>--}}
>>>>>>> 3cedb2bb1e6a07c66a2138e66c4a2cdc3be57b59:resources/views/catalog.blade.php
@endsection


