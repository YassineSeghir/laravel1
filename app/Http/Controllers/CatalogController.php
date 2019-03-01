<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CatalogController extends Controller
{

    public function showCatalog()
    {
        $product = [
            [
                'id' => 0,
                'title' => 'Confiture de figues',
                'description' => 'Délicieuses figues fermentées, cuites dans du vin durant 48 heures. A tester absolument.',
                'image' => "../images/conf_figues.jpg",
                'price' => '15€',
            ],

            [
                'id' => 1,
                'title' => 'Confiture d\'abricots',
                'description' => 'Abricots aux rhums des îles Kerguelen, une merveille de goût. ',
                'image' => "../images/conf_rhum.jpg",
                'price' => '42€',
            ],

            [
                'id' => 2,
                'title' => 'Confiture aux fruits des bois',
                'description' => 'On nous recommande de manger tous les jours des fruits rouges ! Voilà qui sera fait avec cette confiture succulente, finement aromatisée au Jack Daniel\'s.',
                'image' => "https://w2.comptoir-irlandais.com/10289-thickbox_default/jack-daniels-single-barrel-rye.jpg",
                'price' => '12€',
            ]

        ];
        return view('catalog', ['articleBasket' => $product);
    }
}


