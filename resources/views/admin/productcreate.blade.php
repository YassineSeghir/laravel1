@extends('admin.admin.layoutAdministration')
@section('title','Admin')
@section('container')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="result" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom du produit">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="text" class="form-control" name="price" placeholder="Prix">
                </div>
                <div class="form-group">
                    <label for="weight">Poids</label>
                    <input type="text" class="form-control" name="weight" placeholder="Poids">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" name="stock" placeholder="Stock">
                </div>
                <div class="form-group">
                    <label for="id_category">Categorie</label>
                    <input type="text" class="form-control" name="id_category" placeholder="Categorie">
                </div>
                <div class="form-group">
                    <label for="id_image">Image_id</label>
                    <input type="text" class="form-control" name="id_image" placeholder="image_id">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>

            </form>
        </div>
    </div>

@endsection