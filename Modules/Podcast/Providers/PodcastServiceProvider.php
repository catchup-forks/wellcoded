<?php namespace Modules\Podcast\Providers;

use Illuminate\Support\ServiceProvider;

class PodcastServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Podcast\Repositories\PodcastRepository',
            function () {
                $repository = new \Modules\Podcast\Repositories\Eloquent\EloquentPodcastRepository(new \Modules\Podcast\Entities\Podcast());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Podcast\Repositories\Cache\CachePodcastDecorator($repository);
            }
        );
// add bindings

    }
}
