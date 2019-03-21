@extends('admin.layoutAdmin')
@section('title', 'Order Admin')
@section('content')

    @foreach ($order as $orders)
        {{--@dd($order[0])--}}
       <h4>Commande Id n°{{$orders->id}}</h4><br>
        @foreach($orders->product as $product)
        {{$product->name." ".".Quantite commander "." ".$product->pivot->qty}}<br>

        <br>
        @endforeach


    @endforeach

@endsection