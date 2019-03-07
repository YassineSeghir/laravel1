@extends('layout')
@section('title', 'Catalogue de nos produits')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Notre catalogue</h1>
        </div>
    </div>
    <div class="container btm">
        <div class="row">
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix unitaire HT</th>
                    <th scope="col">Voir</th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>
                @foreach($articles as $article)
                    <tr>
                         <td>{{$article->name}}</td>
                        <td>{{$article->description}}</td>
                        <td>{{number_format($article->price/100,2)}} €</td>
                        <td><a href="{{url('product/'.$article->id)}}"><i class="fas fa-eye"></i></a></td>
                        <td><a href="{{url('product.destroy'.$article->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
