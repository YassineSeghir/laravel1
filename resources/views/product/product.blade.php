@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="bande">
        <div class="container">
            <h4>{{ $product->name }}</h4>
            <img src="{{ asset('images/' . $product->imgURL) }}" alt="{{ $product->name }}" height="300px" width="300px">
            <p>{{ $product->description }}</p>
            <p>{{ $product->price/100 . '€' }}</p>
            <br />
            <div class="btn-group" role="group">
                <a href="{{ url('product/' . $product->id . '/edit') }}" class="btn btn-primary">
                    <h3>EDIT</h3>
                </a>
                <a href="{{ url('product/' . $product->id . '/delete') }}" class="btn btn-danger">
                    <h3>DELETE</h3>
                </a>
            </div>
            <br />
        </div>
    </div>
@endsection