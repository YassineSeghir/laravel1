<?php

Route::get('/pages/cgv', 'Pages\PagesController@showCGV');

Route::get('/pages/mentions', 'Pages\PagesController@showMentions');

Route::get('/pages/contact', 'Pages\PagesController@showContact');

Route::get('/homepage', 'Pages\PagesController@showHome');

Route::get('/catalogue', 'Pages\PagesController@showCatalogue');