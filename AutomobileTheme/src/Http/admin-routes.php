<?php

Route::group([
        'prefix'        => 'admin/automobiletheme',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'HKSManpower\AutomobileTheme\Http\Controllers\Admin\AutomobileThemeController@index')->defaults('_config', [
            'view' => 'automobiletheme::admin.index',
        ])->name('admin.automobiletheme.index');

});