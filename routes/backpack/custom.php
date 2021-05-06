<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.



Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('shipper', 'ShipperCrudController');

    //commented out, came from github gist
    //CRUD::resource('shipper','ShipperCrudController')->with(function() {
    Route::get('shipper/import','ShipperCrudController@import')->name('admin.shipper.import');
    Route::post('shipper/importParse','ShipperCrudController@importParse')->name('admin.shipper.importParse');
    Route::post('shipper/importProcess','ShipperCrudController@importProcess')->name('admin.shipper.importProcess');
    Route::get('shipper/importFormatDownload','ShipperCrudController@importFormatDownload')->name('admin.shipper.importFormatDownload');
    //});

}); // this should be the absolute last line of this file


