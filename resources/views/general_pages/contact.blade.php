@extends('simple-page')
@section('title', 'Nom entreprise contactez-nous !')
@section('content')
    <section class="bande">
        <div class="container">
            <h1 class="pages">Contact</h1>
            <p>Formulaire de contact</p>
            <form class="contact" method="post" action="https://httpbin.org/post" enctype="multipart/form-data">
                <div class="retrait">
                    <div>
                        <p>
                            <input type="text" id="prenom" name="prenom" placeholder ="Bonjour, quel est votre prénom ?" class="champ" required>
                        </p>
                        <p>
                            <input type="text" id="nom" name="nom" placeholder ="Pourriez-vous également me donner votre nom ?*" class="champ" required>
                        </p>
                        <p>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder ="Avez-vous un téléphone ? Format: 00-00-00-00-00">
                        </p>
                        <p>
                            <input type="email" id="email" name="email" class="champ" placeholder ="Ou préférez-vous être contacté par email ?">
                        </p>

                        <textarea id="message" name="message" placeholder="Veuillez saisir votre message.* " rows="5" cols="5"></textarea>
                        <input type="submit" name="go" id="go"  value="Envoyez votre message" />
                    </div>
                </div> <!-- Fin retrait!-->
            </form>

        </div>
    </section>
@endsection