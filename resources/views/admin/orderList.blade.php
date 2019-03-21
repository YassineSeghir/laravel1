@extends('admin.layoutAdmin')
@section('title', 'Order Admin')
@section('content')

    @foreach ($order as $orders)
        {{--@dd($order[0])--}}
       <h4>{{$orders->id}}</h4> <br>
        @foreach($orders->product as $product)
        {{$product->name." ".$product->pivot->qty}} <br>
        {{--{{$product->pivot->qty}}--}}
        <br>
        @endforeach


    @endforeach

@endsection