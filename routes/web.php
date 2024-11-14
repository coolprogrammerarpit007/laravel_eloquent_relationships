<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    logger('Hello World!');

    return 'Finished';
});
