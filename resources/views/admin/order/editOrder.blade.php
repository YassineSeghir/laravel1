@extends('admin.layoutAdmin')
@section('title', 'Order edit Admin')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <div class="container">
            <div class="container btm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Mise à jour status commande</h2>
                    </div>
                    <div class="panel-body">
                        <form class="" action="{{ route('admin_orderEdited',['id'=>$order->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="status">Id commande N°{{ $order->id }}</label>

                                <select name="status" id="status">
                                    <option value="Validated">Validated</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Arrived">Arrived</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg">Update</button>
                        </form>
@endsection