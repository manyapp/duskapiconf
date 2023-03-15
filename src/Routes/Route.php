<?php

Route::group(['middleware' => ['web'], 'prefix' => 'duskapiconf', 'namespace'  => 'Manyapp\DuskApiConf\Controllers'], function () {
    Route::get('get', 'DuskApiConfController@get')->name('conf-api-dusk.get');
    Route::get('set', 'DuskApiConfController@set')->name('conf-api-dusk.set');
    Route::get('reset', 'DuskApiConfController@reset')->name('conf-api-dusk.reset');
});
