<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->group(function () {
    Route::resource('xrefStatuses', 'XrefStatusAPIController');

    Route::resource('permissions', 'PermissionAPIController');

    Route::resource('xrefCountries', 'XrefCountryAPIController');

    Route::resource('xrefStates', 'XrefStateAPIController');

    Route::resource('xrefDistricts', 'XrefDistrictAPIController');

    Route::resource('xrefSubdistricts', 'XrefSubdistrictAPIController');

    Route::resource('reporters', 'ReporterAPIController');

    Route::resource('languageLines', 'LanguageLineAPIController');

    Route::resource('tickets', 'TicketAPIController');
});