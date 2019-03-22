@extends('admin.layoutAdmin')
@section('title', 'Order Admin')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                @foreach ($orders as $order)
                    <h2>{{ 'Commande: ' . $order->id }}</h2>
                    <h4>{{ 'passée le ' . $order->date . ', par: Client n°' . $order->id_customer . ': ' .
                            $order->customer->first_name . " " . $order->customer-> last_name}}</h4>
                    @foreach($order->product as $product)
                        <p>{{ $product->pivot->qty ." ". $product->name }}</p>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection