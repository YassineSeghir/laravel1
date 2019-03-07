@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Produit</h1>
        </div>
    </div>
    <div class="bande">
        <div class="container">
            <h4>{{$article->name}}</h4>
            <img src="{{asset('images/'.$article->imgURL)}}" alt="{{$article->name}}" height="300px" width="300px">
            <p>{{$article->description}}</p>
            <p>{{$article->price}}</p>
            <br /><br />
        </div>
    </div>
@endsection