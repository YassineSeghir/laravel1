@extends('layout')
@section('title', 'Panier')
@section('content')
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix unitaire HT</th>
                    <th scope="col">Total</th>
                    <th scope="col">Quantité</th>
                    <th scope="col"></th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>

                @if($data)
                    @foreach($data as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ number_format($product->price/100,2) }} €</td>
                            <td>{{ number_format($product->price/100,2) }}€</td>
                            <td><input type="number" min="1" max="{{ $product->stock }}" value="1"></td>
                            <th>
                            <form action="{{ route('basketSupp') }}" method="post">
                                {{csrf_field()}}
                                @method('DELETE')
                                <input name="id" type="hidden" value="{{ $product->id }}">
                                <td><button type="submit" class="btn btn-danger">Supprimer</button></td>
                            </form>
                            </th>

                        </tr>

                    @endforeach
                    <input name="id" type="hidden" value="{{ $product->id }}">

                @else
                    <h3>Panier vide</h3>
                @endif

            </table>

        </div>
        @if($data)

            <form action="{{route('basketFree')}}" method="post">
                {{csrf_field()}}
                <input type="submit" class=" btn btn-success btn-lg" value="vider panier">
            </form><br>

            <form action="#" method="post">
                {{csrf_field()}}
                <button type="submit" class=" btn btn-success btn-lg">Ajouter</button>
            </form><br>


            <form action="#" method="post">
                {{csrf_field()}}
                <button type="submit" class=" btn btn-success btn-lg">Valider Commande</button>
            </form>

            <h1>Total = {{$total}} €</h1>
        @else

        @endif
    </div>

@endsection


