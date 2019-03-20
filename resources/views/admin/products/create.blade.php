@extends('admin.layoutAdmin')
@section('title', 'Insérer un article')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h4 class="display-4">Insérer un article</h4>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="" action="created" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3">une briève description
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input name="price" type="text" class="form-control" id="price" placeholder="Prix">
                    </div>
                    <div class="form-group">
                        <label for="weight">Poids</label>
                        <input name="weight" type="text" class="form-control" id="weight" placeholder="Poids">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input name="stock" type="text" class="form-control" id="stock" placeholder="Stock">
                    </div>
                    <div class="form-group">
                        <label for="cat">Catégorie</label>
                        <input name="id_category" type="text" class="form-control" id="category" placeholder="Catégorie">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection