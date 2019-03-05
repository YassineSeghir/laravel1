@extends('layout')
@section('title', 'Produit')
@section('content')

        {{$myproduct->NAME}}<br>
       {{--<img src=" {{asset($myproducts->NAME_IMG)}}" ><br>--}}
        {{$myproduct->DESCRIPTION}}<br>
        {{$myproduct->PRICE}}€<br>
        <br>

@endsection