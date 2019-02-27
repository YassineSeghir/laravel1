<?php

Route::get('/pages/cgv', 'Pages\CreatePagesController@showCGV');

Route::get('/pages/mentions', 'Pages\CreatePagesController@showMentions');

Route::get('/pages/contact', 'Pages\CreatePagesController@showContact');