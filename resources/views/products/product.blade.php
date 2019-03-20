@extends('layout')
@section('title', 'Prod.')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            Voir produit : {{ $product->name }}
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <form action="{{ url('/admin/product/' . $product->id) }}" method="post">
                {{ csrf_field() }}
                <div class="col-8">
                    <h3>{{$product->name}}</h3>
                    <img src="{{ asset('images/' . $product->imgURL) }}" alt="{{ $product->name }}">
                </div>
                <div class="col-4"><p>{{ $product->description }}</p>
                    <p>{{ number_format($product->price/100,2) }} €</p>
                </div>
            </form>
        </div>
    </div>
@endsection