<?php

Route::group([
        'prefix'     => 'item',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'ACME\item\Http\Controllers\Shop\itemController@index')->defaults('_config', [
            'view' => 'item::shop.index',
        ])->name('shop.item.index');

});