<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/podcast'], function (Router $router) {
    $router->bind('podcasts', function ($id) {
        return app('Modules\Podcast\Repositories\PodcastRepository')->find($id);
    });
    get('podcasts', ['as' => 'admin.podcast.podcast.index', 'uses' => 'PodcastController@index']);
    get('podcasts/create', ['as' => 'admin.podcast.podcast.create', 'uses' => 'PodcastController@create']);
    post('podcasts', ['as' => 'admin.podcast.podcast.store', 'uses' => 'PodcastController@store']);
    get('podcasts/{podcasts}/edit', ['as' => 'admin.podcast.podcast.edit', 'uses' => 'PodcastController@edit']);
    put('podcasts/{podcasts}/edit', ['as' => 'admin.podcast.podcast.update', 'uses' => 'PodcastController@update']);
    delete('podcasts/{podcasts}', ['as' => 'admin.podcast.podcast.destroy', 'uses' => 'PodcastController@destroy']);
// append

});
