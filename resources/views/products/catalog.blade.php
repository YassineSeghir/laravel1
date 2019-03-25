@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                <h1>Catalogue</h1>
                @foreach ($products as $product)
                    <h3>{{ $product->name }}</h3>
                    <h3>{{number_format($product->price/100,2)}} €</h3>
                    @if($product->image == NULL)
                        <img src="{{asset('images/no_image.png')}}" alt="" height="100">
                    @else
                        <img src="{{asset($product->image->imgURL) }}" alt="{{ $product->name }}" height="100">

                    @endif
                    <p>{{$product->description}}</p>
                    <div>
                        <a class=" btn btn-success btn-lg" href="{{ url('product/'.$product->id) }}" role="button">
                            Fiche produit
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


