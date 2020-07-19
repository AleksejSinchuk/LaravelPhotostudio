<?php

Route::get('/','StudioController@studio');


Route::get('/team',function (){ return view('team');});
Route::get('/services',function (){ return view('services');});
Route::get('/contacts',function (){ return view('contacts');});

Route::post('/admin','AdminController@register');
Route::get('/admin','AdminController@login');

Route::post('/admin/multiload','AdminController@multiupload')->name('image.multiupload');
Route::post('/multiload','AdminController@multiupload')->name('image.multiupload');
Route::get('/admin/multiload','AdminController@multiload');
Route::get('/multiload','AdminController@multiload');


Route::get('/admin/delete','AdminController@delete');
Route::get('/delete','AdminController@delete');
Route::get('/admin/deletecatalog/{catalog}','AdminController@deleteCatalog');
Route::get('/deletecatalog/{catalog}','AdminController@deleteCatalog');

Route::get('/{catalogname}','StudioController@catalog');
