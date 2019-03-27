@extends('layout')
@section('title', 'Home')
@section('content')
    <div class="bande fond">
        <div class="container">
            <h1 class="slideLeft">
                Les confitures<br> <span>Bon Papa</span>
            </h1>
        </div>
    </div>
    <div class="bande">
        <div class="container home">
          <h2>Bienvenue</h2>
          <h3>Les confitures bon papa ....<br>
              <span>De la gnôle, du sucre, du bonheur !</span>
          </h3>
        </div>
    </div>
        <div class="bande">
        <div class="container home">
            <p><br>Il Fallait OSER, avoir de la TENACITE, du COURAGE, ne pas ménager son temps, son énergie afin de faire
                connaître nos produits :
                <ul>
                    <li>confitures,</li>
                    <li>gelées,</li>
                    <li>pâtes de fruits,</li>
                    <li>pâte à tartiner, </li>
                    <li>confit de vin</li>
                </ul>
                en profitant de toutes les opportunités : marchés locaux,
                manifestations culturelles et touristiques et salons professionnels.</p>
            <p>
                Nous savions qu’il fallait quelque chose de plus à offrir à nos clients que de bonnes confitures :</p>

            <p>de l’originalité, de la diversité, de l’authenticité et une présentation qui donne envie d’acheter et
                d’ offrir. Ce sont 150 Recettes de produits différents disponibles
                en 5 Grammages. 80000 Pots et 240 Kg de Pâtes de Fruitsvendus en 2018.</p>
            <p>Des recettes originales spécialement conçues pour vous messieurs.</p>
                <p>Essayez dès à présent notre confiture de Gin, notre gelée de Cognac ou notre petite dernière la
                confiture Matignon.</p>
        </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col">
                    <h4>{{ $product->name }}</h4>
                    <a href="{{ url('product/'.$product->id) }}">
                    @if($product->image == NULL)
                        <img src="{{ asset('images/no_image.png') }}" alt="" height="100">
                    @else
                        <img src="{{ asset($product->image->imgURL) }}" alt="{{ $product->name }}" height="100">
                     @endif
                     </a>
                </div>
        @endforeach
    </div>
    </div>
@endsection