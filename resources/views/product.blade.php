@extends('layout')
@section('title', 'Produit')
@section('content')
        <style>
                img {
                        height:310px;
                        min-width: 100px;
                        border-radius: 5px;
                        border: solid 1px #000;
                }


        </style>

        {{$product->name}}<br>
        <img src="{{asset($product->image->imgURL)}}"><br>
        {{$product->description}}<br>
        {{$product->price/100}} €<br>
        {{--<a class="btn btn-success btn-lg" href="{{url('admin/'.$product->id.'/produpdate')}}"role="button">Modifier produit</a>--}}
        {{--<a class="btn btn-success btn-lg" href="{{url('admin/'.$product->id.'/productdelete')}}"role="button">Suprimer produit</a>--}}



@endsection