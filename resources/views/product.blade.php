@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Produit</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3>{{$article->name}}</h3>
                <img src="{{asset('images/'.$article->imgURL)}}" alt="{{$article->name}}">
            </div>
            <div class="col-4"><p>{{$article->description}}</p>
                <p>{{number_format($article->price/100,2)}} €</p></div>
        </div>
    </div>

@endsection