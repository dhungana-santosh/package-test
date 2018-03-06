<?php
Route::get('/test-package','TestVendor\TestPackage\controllers\TestController@index')
    ->name('test-package.index')
    ->middleware('web');