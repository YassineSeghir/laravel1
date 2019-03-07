@extends('layout')
@section('title', 'Produit')
@section('content')
    <div class="bande">
        <div class="container">
            <form action="result" method="POST">
                <fieldset>
                    {{ csrf_field() }}
                    <legend>Add a Product to the catalog</legend>
                    <input type="text" name="name" placeholder="name of product">
                    <input type="text" name="description" placeholder="description of product">
                    <input type="text" name="price" placeholder="price in cents (1/100)">
                    <input type="text" name="weight" placeholder="weight in grams (1/1000) ">
                    <input type="text" name="stock" placeholder="quantity in stock">
                    <input type="text" name="id_cat" placeholder="category identifier">
                    <input type="submit" value="add this product">
                </fieldset>
                <br /><br />
            </form>
        </div>
    </div>
@endsection