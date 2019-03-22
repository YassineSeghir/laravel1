@extends('admin.layoutAdmin')
@section('title', 'Order Admin')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                @foreach ($order as $orders)
                    <h2>{{ 'Commande: ' . $orders->id }}</h2>
                    <h4>{{ 'passée le ' . $orders->date . ', par: Client n°' . $orders->id_customer . ': ' .
                            $orders->customer->first_name . " " . $orders->customer-> last_name}}</h4>
                    @foreach($orders->product as $product)
                        <p>{{ $product->pivot->qty ." ". $product->name }}</p>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection