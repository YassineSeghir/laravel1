@extends('layout')
@section('title', 'Insérer un article')
@section('content')

    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Insérer un article</h1>
        </div>
    </div>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="" action="/catalog" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
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
                        <label for="cat">Catégorie</label>
                        <input type="text" class="form-control" name="cat" placeholder="cat">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
   </div>
@endsection