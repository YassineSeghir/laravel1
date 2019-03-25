@extends('layout')
<<<<<<< HEAD
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
=======
@section('title', 'Prod.')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            Voir produit : {{$article->name}}
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <form action="{{url('/admin/product/' . $article->id)}}" method="post">
                <div class="col-8">
                    <h3>{{$article->name}}</h3>
                    <img src="{{asset('images/'.$article->imgURL)}}" alt="{{$article->name}}">
                </div>
                <div class="col-4"><p>{{$article->description}}</p>
                    <p>{{number_format($article->price/100,2)}} €</p>
                    {{ csrf_field() }}
                </div>
            </form>
>>>>>>> 3cedb2bb1e6a07c66a2138e66c4a2cdc3be57b59
        </div>
    </div>
@endsection