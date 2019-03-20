@extends('layout')
@section('title', 'Prod.')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container btm">
            <div class="row">
                <form action="{{ url('/admin/product/' . $product->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-8">
                        <h3>{{ $product->name }}</h3>
                        <h3>{{ number_format($product->price/100,2) }} €</h3>
                        <img src="{{ asset($product->image->imgURL) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="col-4">
                        <p>{{ $product->description }}</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection