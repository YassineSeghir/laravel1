@extends('admin.layoutAdministration')
@section('title', 'Produit à supprimer ')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <h1 class="display-4">Supprimer : {{$article->name}}</h1>
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <form action="{{url('/admin/delete/' . $article->id)}}" method="post">
                <div class="col-8">
                    <h3>{{$article->name}}</h3>
                    <img src="{{asset('../images/'.$article->imgURL)}}" alt="{{$article->name}}">
                </div>
                <div class="col-4"><p>{{$article->description}}</p>
                    <p>{{number_format($article->price/100,2)}} €</p>
                    <input type="submit" name=ok" value="Etes-vous certain de vouloir supprimer cet article ?">
                    <input type="hidden" name="_method" value="delete"/>
                    {{ csrf_field() }}
                </div>
            </form>
        </div>
    </div>
@endsection