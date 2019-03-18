@extends('layout')
@section('title', 'Produit à effacer')
@section('content')
    <div class="bande">
        <div class="container">
            <h4>you can't undo this action; there will be no confirmation upon deletion</h4>
            <form action="delete" method="DELETE">
                {{ csrf_field() }}
                <fieldset>
                    <input type="text" name="price" placeholder="new price in cents (1/100)">
                    <input type="submit" value="Delete product">
                </fieldset>
                <br /><br />
            </form>
        </div>
    </div>
@endsection