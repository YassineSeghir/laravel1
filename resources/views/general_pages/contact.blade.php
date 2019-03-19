@extends('layout')
@section('title', 'Nom entreprise contactez-nous !')
@section('content')
    <section class="bande">
        <div class="container">
            <h1 class="pages">Contact</h1>
            <p>Formulaire de contact</p>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Contact</h2>
                </div>
                <div class="panel-body">
                    <form class="" action="/?????" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" placeholder="nom">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Prénom</label>
                            <input type="text" class="form-control" name="prenom" placeholder="prenom">
                        </div>
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="text" class="form-control" name="mail" placeholder="mail">
                        </div>
                        <textarea id="message" name="message" placeholder="Veuillez saisir votre message.* " rows="5" cols="5"></textarea>
                        <input type="submit" name="go" id="go"  value="Envoyez votre message" />
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection