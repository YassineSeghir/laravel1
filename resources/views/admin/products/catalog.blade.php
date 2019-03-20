@extends('admin.layoutAdmin')
@section('title', 'Page Admin')
@section('content')
    <h1>Liste des Produits </h1>
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
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{number_format($product->price/100,2)}} €</td>
                        <td><a href="{{ url('admin/product/' . $product->id) }}"><i class="fas fa-eye"></i></a></td>
                        <td><a href="{{ url('admin/product/' . $product->id) . '/edit' }}"><i
                                        class="fas fa-edit"></i></a></td>
                        <td><a href="{{ url('admin/product/' . $product->id) . '/delete' }}"><i
                                        class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection