@extends('layout')
@section('title', 'Panier')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Mon panier</h1>
        </div>
    </div>
    <div class="container btm">
        <td class="row">
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
            <tr>
                @foreach($panier as $produit)

                    <td> {{$produit['title']}}<br>
                    <td>  <img src="{{$produit['image']}}" class="imgbasket"></td>
                    <td> {{$produit['price']}}</td>
                    <td>  {{$produit['qty']}}</td>
                    <td>{{$total}}</td>
                    <td><i class="fas fa-trash-alt" id="suppr" style="font-size: 15px;"></i></td>

            </tr>
                @endforeach
            <tr class="table-info"><td colspan="6" class="right">
                     </td></tr>
            </tbody>
        </table>
    </div>
    </div>
@endsection
