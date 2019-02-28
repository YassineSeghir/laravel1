@extends('simple-page')
@section('title', 'Catalogue')
@section('content')
	<h1>Catalogue</h1>

	@foreach($articlePanier as $Produit)
	{{$Produit['title']}}</br>
	{{$Produit['description']}}</br>
	<img src="{{$Produit['image']}}"></br>
	{{$Produit['price']}}</br>
	</br>
	@endforeach
@endsection
