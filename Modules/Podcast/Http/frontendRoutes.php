<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/podcasts'], function (Router $router) {
    get('/', ['as' => 'podcasts.index', 'uses' => 'PodcastController@index']);
});
