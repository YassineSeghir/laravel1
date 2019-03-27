@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                <h1>Catalogue</h1>

                <h2>TRIER :</h2>

                <form class="input-group mb-3" id="frm" onchange="document.getElementById('frm').submit();">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Trier </label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="sort">
                        <option selected>Choisir </option>
                        <option>Nom</option>
                        <option>Prix</option>
                        <option >Catégories</option>
                    </select>
                </form>
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


