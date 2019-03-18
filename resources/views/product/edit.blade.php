@extends('layout')
@section('title', 'Produità mettre à jour')
@section('content')
    <div class="bande">
        <div class="container">
            <form action="edited" method="POST">
                <fieldset>
                    {{ csrf_field() }}
                    <legend>modify name / price</legend>
                    <label>current name is: {{ $product->name }} </label>
                    <input type="text" name="name" placeholder="new name">
                    <br />
                    <label>current name is: {{ $product->price }} cents </label>
                    <input type="text" name="price" placeholder="new price in cents">
                    <br />
                    <input type="submit" value="modify this product">
                </fieldset>
                <br /><br />
            </form>
        </div>
    </div>
@endsection