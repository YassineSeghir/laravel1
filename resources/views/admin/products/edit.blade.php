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
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" name="name" class="form-control" placeholder="Nom du produit"
                                       value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Description"
                                       value="{{ $product->description }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input type="number" name="price" min="100" max="10000" class="form-control"
                                       placeholder="Prix" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">Poids</label>
                                <input type="number" name="weight" min="100" max="10000" class="form-control"
                                       placeholder="Poids" value="{{ $product->weight }}" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" min="1" max="100000" class="form-control"
                                       placeholder="Stock" value="{{ $product->stock }}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="categories">Catégories</label>
                                <select name="cat" id="cat" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" selected>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_image">Image_id</label>
                                <input type="number" name="id_image" min="1" max="100" class="form-control"
                                       placeholder="image" value="{{ $product->id_image }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




