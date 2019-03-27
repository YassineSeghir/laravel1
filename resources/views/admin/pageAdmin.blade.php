@extends('layoutAdmin')
@section('title', 'Page Admin')
@section('container')
    <form action="#" method="GET">
        <h1>Admin Connexion</h1>
        <label><b>Id</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        <input type="submit" id='submit' value='LOGIN'>
    </form>
@endsection