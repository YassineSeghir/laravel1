@extends('admin.layoutAdministration')
@section('title', 'Prod.')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            Voir produit : {{$article->name}}
        </div>
    </div>
    <div class="container btm">
        <div class="row">
            <form action="{{url('/admin/product/' . $article->id)}}" method="post">
                <div class="col-8">
                    <h3>{{$article->name}}</h3>
                    <img src="{{asset('images/'.$article->imgURL)}}" alt="{{$article->name}}">
                </div>
                <div class="col-4"><p>{{$article->description}}</p>
                    <p>{{number_format($article->price/100,2)}} €</p>
                    {{ csrf_field() }}
                </div>
            </form>
        </div>
    </div>
@endsection