<?php

Route::get('/pages/cgv', 'PagesController@showCGV');

Route::get('/pages/mentions', 'PagesController@showMentions');

Route::get('/pages/contact', 'PagesController@showContact');

Route::get('/homepage', 'PagesController@showHome');

Route::get('/catalogue', 'PagesController@showCatalogue');