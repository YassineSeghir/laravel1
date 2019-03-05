@extends('layout')
@section('title', 'Notre catalogue')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Notre catalogue</h1>
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Image</th>
                    <th scope="col">Prix unitaire HT </th>
                    <th scope="col center">Voir le produit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($article as $art)
                    <tr>
                        <td style="width:400px"><h4>{{$art->NAME}}</h4></td>
                        <td><img src="images/{{$art->NAME_IMG}}" class="imgbasket"></td>
                        <td>{{number_format($art->PRICE,2)}}</td>
                         <td>
                            <a href="{{$art->ID_ARTICLE}}"><i class="far fa-eye" style="font-size: 20px"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection