<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" title="de la gnôle, du sucre, du bonheur !">
        <i class="fas fa-wine-bottle" style="font-size: 48px;"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin_catalog') }}">Liste Produits</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin_productCreate') }}">Ajouter un produit </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Catégories Produits</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin_customerList') }}">Liste Clients</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('list') }}">Liste Commandes</a>
            </li>
        </ul>
    </div>
</nav>