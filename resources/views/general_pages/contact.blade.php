@extends('layout')
@section('title', 'Nom entreprise contactez-nous !')
@section('content')
    <section class="bande">
        <div class="container">
            <h1 class="pages">Contact</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <form class="" action="#" method="post">
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
                        <div class="form-group">
                        <textarea id="message" name="message" placeholder="Veuillez saisir votre message.* " rows="10"
                                  cols="50"></textarea>
                        </div>
                        <input type="submit" name="go" id="go" value="Envoyez votre message"/>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection