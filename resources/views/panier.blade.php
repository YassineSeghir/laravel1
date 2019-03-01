<html lang="fr">
<head>
    <title>Catalogue - fonctions 2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Pacifico" rel="stylesheet">
    <meta name="keywords" content="">
    <meta name="description" content=" ">
    <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
          crossorigin="anonymous">
</head>
<body>
@include('includes.header_panier')
<section class="bande">
    <div class="container">
        <h2>Panier</h2>
    </div>
</section>
<section class="bande">
    <div class="container">
        <div class="titrePanier">
            <div class="left six">Produit</div>
            <div class="left twenty">Prix</div>
            <div class="right twenty">Supprimer</div>
        </div>
        <form method="post" action="panier.blade.php" enctype="multipart/form-data">

        </form>
    </div>
</section>
</body>
<html>

