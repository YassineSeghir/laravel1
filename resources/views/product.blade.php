@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="bande">
        <div class="container">
            <h4>{{$product->name}}</h4>
            <img src="{{asset('images/'.$product->imgURL)}}" alt="{{$product->name}}" height="300px" width="300px">
            <p>{{$product->description}}</p>
            <p>{{$product->price}}</p>
            <br /><br />
        </div>
    </div>
@endsection