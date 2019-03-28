@extends('layout')
@section('title', 'Catalogue')
@section('content')
    <div class="jumbotron jumbotron-fluid btm">
        <h1>Catalogue</h1>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="input-group mb-3" id="frm" onchange="document.getElementById('frm').submit();">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Trier </label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="sort">
                    <option selected>Choisir</option>
                    <option>Nom</option>
                    <option>Prix</option>
                    <option>Catégories</option>
                </select>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table">
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>@if (isset($product->category->name))
                                {{ $product->category->name }}
                            @endif</td>
                        <td>
                            @if($product->image == NULL)
                                <img src="{{ asset('images/no_image.png') }}" alt="" height="100">
                            @else
                                <img src="{{ asset($product->image->imgURL) }}" alt="{{ $product->name }}" height="100">
                            @endif
                        </td>
                        <td>{{$product->description}}<br><br>
                            {{number_format($product->price/100,2)}}
                            €
                            <br><a class=" btn btn-success btn-lg" href="{{ url('product/'.$product->id) }}"
                                   role="button">
                                Fiche produit
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


