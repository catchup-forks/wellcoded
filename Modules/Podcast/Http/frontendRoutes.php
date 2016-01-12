<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/podcasts'], function (Router $router) {
    get('/', ['as' => 'podcasts.index', 'uses' => 'PodcastController@index']);
    get('/rss', ['as' => 'podcasts.rss', 'uses' => 'PodcastController@rss']);
    get('/{podcast_id}-{podcast_slug}', ['as' => 'podcasts.show', 'uses' => 'PodcastController@show'])
        ->where('podcast_id', '[0-9]+')
        ->where('podcast_slug', '.+');
});
