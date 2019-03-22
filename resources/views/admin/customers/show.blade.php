@extends('admin.layoutAdmin')
@section('title', 'Page Admin')
@section('content')
    <h1>Client n° {{ $customer->id . ' - ' . $customer->first_name . ' ' . $customer->last_name}} </h1>
    <div class="container btm">
        @foreach ($customer->order as $order)
            <h4>{{ 'Commande n° ' . $order->id }}</h4>

            @foreach ($order->product as $product)
                <table class="table table-striped">
                <tr>
                    <td>{{ $product->pivot->qty . ' ' .$product->name }}</td>
                </tr>
                </table>
            @endforeach
        @endforeach
    </div>
@endsection