@extends('admin.layoutAdministration')
@section('title', 'Page Admin')
@section('content')
    <h1>Administration du site </h1>
    <div id="app">
        @yield('content')
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
                    <th scope="col">Editer</th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{number_format($product->price/100,2)}} €</td>
                        <td><a href="{{url('admin/seeProduct/'.$product->id)}}"><i class="fas fa-eye"></i></a></td>
                        <td><a href="{{url('admin/edit/'.$product->id)}}"><i class="fas fa-edit"></i></a></td>
                        <td><a href="{{url('admin/delete/'.$product->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection