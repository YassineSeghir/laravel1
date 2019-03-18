@extends('layout')
@section('title', 'Produit')
@section('content')


        {{$product->name}}<br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>
        {{--<a class="btn btn-success btn-lg" href="{{url('admin/'.$product->id.'/produpdate')}}"role="button">Modifier produit</a>--}}
        {{--<a class="btn btn-success btn-lg" href="{{url('admin/'.$product->id.'/productdelete')}}"role="button">Suprimer produit</a><br><br>--}}
        <br>

@endsection