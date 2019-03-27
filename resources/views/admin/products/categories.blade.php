@extends('admin.layoutAdmin')
@section('title', 'Catégories des produits')
@section('titrePage', 'Catégories des produits')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Editer</th>
            <th scope="col">Supprimer</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category->name}} </th>
                <td><a href="{{url ('admin/products/editCategories/' . $category->id)  }}"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action = "{{url('admin/products/categories/' . $category->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-primary"><img src="../../images/delete.png" class="delete"></button></i>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('soustitre', 'Ajouter une catégorie')
@section('form')
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="" action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Nom de la catégorie">
                </div>
                <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
@endsection


