@extends('admin.layoutAdmin')
@section('title','Admin')
@section('container')



    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Supprimer produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{route('delete')}}" method="post"  >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="id">Id du produit</label>
                    <input type="text" class="form-control" name="id" placeholder="Id du produit">
                </div>



                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
        </div>
    </div>



@endsection