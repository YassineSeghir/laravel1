@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <h1>Catalogue</h1>
    @foreach($products as $product)

        <a href="{{url('product/'.$product->id)}}">
            <img src="{{asset('images/'.$product->imgURL)}}" alt="{{$product->name}}" height="30px" width="30px">
        </a>
        <h4>{{$product->name}}</h4>
        <p>{{$product->price}}</p>

    @endforeach
@endsection
