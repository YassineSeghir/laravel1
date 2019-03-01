<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BasketController extends Controller
{
    public function showPanier()
    {
        $test = [
            [
                'title' => 'Confiture de figues',
                'description' => 'Délicieuses figues fermentées, cuites dans du vin durant 48 heures. A tester absolument.',
                'image' => '../images/conf_figues.jpg',
                'qty' => '15',
                'price' => '15',
            ],

            [
                'title' => 'Confiture d\'abricots',
                'description' => 'Abricots aux rhums des îles Kerguelen, une merveille de goût. ',
                'image' => '../images/conf_rhum.jpg',
                'qty' => '15',
                'price' => '42',
            ],

            [
                'title' => 'Confiture aux fruits des bois',
                'description' => 'On nous recommande de manger tous les jours des fruits rouges ! Voilà qui sera fait avec cette confiture succulente, finement aromatisée au Jack Daniel\'s.',
                'image' => 'https://w2.comptoir-irlandais.com/10289-thickbox_default/jack-daniels-single-barrel-rye.jpg',
                'qty' => '15',
                'price' => '12',
            ]

        ];

        $totalLigne = 0;
        $total = 0;
        foreach($test as $ligne){
            $totalLigne = $ligne['qty'] * $ligne['price'];
            //$total = $totalLigne + $total;
            $total += $total;
        }



        // affiche view panier créé la variable toto qui a le contenu de $test
      return view('panier',['panier' => $test]);
        return view('panier',['panier' => $total]);
    }
}

