@extends('layout')
@section('title', 'Panier')
@section('content')
<form action="panier" method="post">
    @method ('PUT')
    @csrf
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix unitaire HT</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                @if($data)

                    @foreach($data as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ number_format($product->price/100,2) }} €</td>
                            <td><input type="number" min="1" max="{{ $product->stock }}"></td>
                            <td>{{ number_format($product->price/100,2) }}</td>
                        </tr>
                    @endforeach


                @else
                    <h3>{{'Panier vide'}}</h3>

                @endif
            </table>
        </div>
        <input name="id" type="hidden" value="{{ $product->id }}">
        <button type="submit" class=" btn btn-success btn-lg">Ajouter</button>
    </div>

</form>
@endsection


