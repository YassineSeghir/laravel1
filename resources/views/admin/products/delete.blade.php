@extends('admin.layoutAdmin')
@section('title', 'Produit à supprimer ')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Supprimer : {{$product->name}}</h1>
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <form action="{{ url('/admin/product/' . $product->id) }}" method="post">
                {{ csrf_field() }}
                <div class="col-8">
                    <h3>{{ $product->name }}</h3>
                    <img src="{{ asset('../images/' . $product->imgURL) }}" alt="{{ $product->name }}">
                </div>
                <div class="col-4"><p>{{ $product->description }}</p>
                    <p>{{ number_format($product->price/100,2) }} €</p>
                    <input type="submit" name=ok" value="Etes-vous certain de vouloir supprimer cet article ?">
                    <input type="hidden" name="_method" value="delete"/>
                </div>
            </form>
        </div>
    </div>
@endsection