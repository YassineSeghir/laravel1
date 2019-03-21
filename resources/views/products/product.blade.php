@extends('layout')
@section('title', 'Prod.')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container btm">
            <div class="row">
                <div class="col-8">
                    <h3>{{ $product->name }}</h3>
                    <h3>{{ number_format($product->price/100,2) }} €</h3>
                    <img src="{{ asset($product->image->imgURL) }}" alt="{{ $product->name }}">
                </div>
                <div class="col-4">
                    <p>{{ $product->description }}</p>
                    <form action="{{ route('basket') }}" method="post">
                        @method ('PUT')
                        @csrf
                        <input name="id" type="hidden" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-success btn-lg">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection