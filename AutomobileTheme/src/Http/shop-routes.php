<?php

Route::group([
        'prefix'     => 'automobiletheme',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'HKSManpower\AutomobileTheme\Http\Controllers\Shop\AutomobileThemeController@index')->defaults('_config', [
            'view' => 'automobiletheme::shop.index',
        ])->name('shop.automobiletheme.index');

});