<?php

Route::group(['middleware' => ['web'], 'prefix' => 'duskapiconf', 'namespace'  => 'Manyapp\DuskApiConf\Controllers'], function () {
    Route::get('get', 'DuskApiConfController@get');
    Route::get('set', 'DuskApiConfController@set');
    Route::get('reset', 'DuskApiConfController@reset');
});
