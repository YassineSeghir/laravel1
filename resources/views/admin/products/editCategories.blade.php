@extends('admin.layoutAdmin')
@section('title', 'Editer la catégorie')
@section('titrePage', 'Editer la catégorie : ' )
@section('content')
    {{$category->name}}

    <form class="" action="{{ route('update', $category->id) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{$category->name}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection



