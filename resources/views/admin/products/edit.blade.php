@extends('admin.layoutAdmin')
@section('title','Admin')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Mise à jour produit</h2>
                    </div>
                    <div class="panel-body">
                        <form class="" action="edited" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" class="form-control" name="name" placeholder="Nom du produit"
                                       value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                       value="{{ $product->description }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input type="number" min="100" max="100000" class="form-control" name="price" placeholder="Prix"
                                       value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">Poids</label>
                                <input type="number" min="1" max="100" class="form-control" name="weight" placeholder="Poids"
                                       value="{{ $product->weight }}" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" min="100" max="100000" class="form-control" name="stock" placeholder="Stock"
                                       value="{{ $product->stock }}" required>
                            </div>
                            <div class="form-group">
                                <label for="id_category">Categorie</label>
                                <input type="text" class="form-control" name="id_category" placeholder="Categorie"
                                       value="{{ $product->id_category }}" required>
                            </div>
                            <div class="form-group">
                                <label for="id_image">Image_id</label>
                                <input type="number" min="1" max="100" class="form-control" name="image_id" placeholder="id_image"
                                       value="{{ $product->image_id }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




