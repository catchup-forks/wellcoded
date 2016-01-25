<?php namespace Modules\Podcast\Repositories\Cache;

use Modules\Podcast\Repositories\PodcastRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CachePodcastDecorator extends BaseCacheDecorator implements PodcastRepository
{
    public function __construct(PodcastRepository $podcast)
    {
        parent::__construct();
        $this->entityName = 'podcast.podcasts';
        $this->repository = $podcast;
    }

    public function allPublished()
    {
        return  $this->repository->allPublished();
    }

    public function latests($perPage = 15)
    {
        return  $this->repository->latests($perPage);
    }
}
