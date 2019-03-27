@extends('admin.layoutAdmin')
@section('title', 'Page Admin')
@section('content')
    <h1>Liste des Clients </h1>
    <div class="container btm">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">login</th>
                    <th scope="col">Nom de Famille</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">email</th>
                    <th scope="col">Nom de rue</th>
                    <th scope="col">Complément d'adresse</th>
                    <th scope="col">Code Postal</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Pays</th>
                    <th scope="col">Commandes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ isset($customer->address[0]->street) ? $customer->address[0]->street : ' '}}</td>
                        <td>{{ isset($customer->address[0]->street2) ? $customer->address[0]->street2 : ' ' }}</td>
                        <td>{{ isset($customer->address[0]->zipcode) ? $customer->address[0]->zipcode : ' ' }}</td>
                        <td>{{ isset($customer->address[0]->city) ? $customer->address[0]->city : ' ' }}</td>
                        <td>{{ isset($customer->address[0]->country) ? $customer->address[0]->country : ' ' }}</td>
                        <td>
                            <a href="{{ url('admin/customer/' . $customer->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection