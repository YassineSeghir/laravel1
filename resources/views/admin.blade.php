@extends('layout')
@section('title', 'Page Admin')
@section('content')
    <form action="#" method="GET">
<<<<<<< HEAD:resources/views/admin.blade.php
        <h1>Connexion</h1>
        <label><b>Id</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        <input type="submit" id='submit' value='login'>
=======
        <h1>Admin Connexion</h1>
            <label><b>Id</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <label><b>Password</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            <input type="submit" id='submit' value='LOGIN'>
>>>>>>> 3cedb2bb1e6a07c66a2138e66c4a2cdc3be57b59:resources/views/pageAdmin.blade.php
    </form>
    <br />
@endsection