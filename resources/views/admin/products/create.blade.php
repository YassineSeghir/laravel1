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
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3">
                            une brève description de votre produit
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input name="price" type="number" min="10" max="100000" class="form-control" id="price"
                               placeholder="Prix" required>
                    </div>
                    <div class="form-group">
                        <label for="weight">Poids</label>
                        <input name="weight" type="number" min="10" max="3000" class="form-control" id="weight"
                               placeholder="Poids" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input name="stock" type="number" min="1" max="100000" class="form-control" id="stock"
                               placeholder="Stock" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="categories">Catégories</label>
                        <select id="cat" class="form-control" name="cat">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" selected>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="images">Images</label>
                        <select id="img" class="form-control" name="img">
                            @foreach ($images as $image)
                                <option value="{{$image->id}}" selected>
                                    {{ $image->imgURL }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection