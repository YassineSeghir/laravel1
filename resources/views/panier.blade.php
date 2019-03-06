@extends('layout')
@section('title', 'Panier')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Mon panier</h1>
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Quantité</th>
                <th scope="col">Prix unitaire HT </th>
                <th scope="col">Total HT </th>
                <th scope="col center">Supprimer </th>
            </tr>
            </thead>
            <tbody>
                @php
                    $sum = 0;
                @endphp
                @foreach($panier as $produit)
                    <tr>
                        <td style="width:400px"><h4>{{$produit['title']}}</h4><br>{{$produit['description']}}</td>
                        <td><img src="{{$produit['image']}}" class="imgbasket"></td>
                        <td> {{$produit['price']}}</td>
                        <td> {{$produit['qty']}}</td>
                        <td> {{$produit['totalLigne']}}</td>
                        <td><i class="fas fa-trash-alt" id="suppr" style="font-size: 15px;"></i> </td>
                    </tr>
                    @php
                        $sum = $produit['totalLigne']+ $sum
                    @endphp
                @endforeach
            <tr class="table-info">
                <td colspan="6" class="right">
                    <h4> Total commande :</h4> {{ number_format($sum,2)}}
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
@endsection
