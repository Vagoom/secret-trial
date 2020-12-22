<?php

use App\ApiDataManager;
use Slim\App;

return function (App $app) {

    $app->get('/update-or-populate', ApiDataManager::class);

};