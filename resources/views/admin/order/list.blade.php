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
                    <form action="{{url('admin/order/{id}/delete')}}" method="post">
                        {{csrf_field()}}
                        @method('DELETE')
                        <a><input name="id" type="hidden" value="{{ $order->id }}"></a>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <form action="{{url('admin/order/edited')}}" method="post">
                        {{csrf_field()}}
                        <a><input name="id" type="hidden" value="{{ $order->id }}"></a>
                        <button type="submit" class="btn btn-success btn-lg">Editer</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection

