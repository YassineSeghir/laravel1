<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" title="de la gnôle, du sucre, du bonheur !"><i class="fas fa-wine-bottle" style="font-size: 48px;"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('back')}}">Catalogue</a>
            </li> 
            <li class="nav-item active">
                <a class="nav-link" href="{{route('create')}}">Ajouter un produit </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Gérer catégories</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Voir user</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Ajouter user</a>
            </li>
        </ul>
    </div>
</nav>