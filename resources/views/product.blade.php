@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="bande">
        <div class="container">
            <h2>{{$myproduct['title']}}</h2>
            <p>{{$myproduct['description']}}</p>
            <img src="{{$myproduct['image']}}" width="800px" height="800px"/>
        </div>
    </div>
@endsection