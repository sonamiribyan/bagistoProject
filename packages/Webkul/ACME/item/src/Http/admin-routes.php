<?php

Route::group([
        'prefix'        => 'admin/item',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'ACME\item\Http\Controllers\Admin\itemController@index')->defaults('_config', [
            'view' => 'item::admin.index',
        ])->name('admin.item.index');

});