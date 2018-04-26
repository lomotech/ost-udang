<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('reporters', 'ReporterController');
Route::resource('tickets', 'TicketController');

Route::name('admin.')->prefix('admin')->group(function(){
    Route::resource('permissions', 'PermissionController');
    Route::resource('xrefStatuses', 'XrefStatusController');
    Route::resource('xrefCountries', 'XrefCountryController');
    Route::resource('xrefStates', 'XrefStateController');
    Route::resource('xrefDistricts', 'XrefDistrictController');
    Route::resource('xrefSubdistricts', 'XrefSubdistrictController');
    Route::resource('xrefOptions', 'XrefOptionController');
    Route::resource('languageLines', 'LanguageLineController');
});

Route::name('public.')->prefix('public')->group(function(){
    Route::resource('tickets', 'PublicTicketController')->only(['create', 'store', 'show']);
});

Route::name('blog.')->prefix('blog')->group(function(){

});