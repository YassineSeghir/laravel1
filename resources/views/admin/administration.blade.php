@extends('admin.layoutAdministration')
@section('title', 'Page Admin')
@section('content')
    <h1>Administration du site </h1>
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix unitaire HT</th>
                    <th scope="col">Voir</th>
                    <th scope="col">Editer</th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->name}}</td>
                        <td>{{$article->description}}</td>
                        <td>{{number_format($article->price/100,2)}} €</td>
                        <td><a href=" "><i class="fas fa-eye"></i></a></td>
                        <td><a href="{{url('admin/edit/')}}"><i class="fas fa-edit"></i></a></td>
                        <td><a href="{{url('admin/product/'.$article->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection