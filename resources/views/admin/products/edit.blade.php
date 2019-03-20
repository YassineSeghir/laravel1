@extends('admin.layoutAdmin')
@section('title','Admin')
@section('container')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Mise a jour produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="resultupdate" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom du produit" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Description" value="{{$product->description}}">
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="text" class="form-control" name="price" placeholder="Prix" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label for="weight">Poids</label>
                    <input type="text" class="form-control" name="weight" placeholder="Poids" value="{{$product->weight}}">
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{$product->stock}}">
                </div>
                <div class="form-group">
                    <label for="id_category">Categorie</label>
                    <input type="text" class="form-control" name="id_category" placeholder="Categorie" value="{{$product->id_category}}">
                </div>
                <div class="form-group">
                    <label for="id_image">Image_id</label>
                    <input type="text" class="form-control" name="image_id" placeholder="id_image" value="{{$product->image_id}}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>
@endsection




