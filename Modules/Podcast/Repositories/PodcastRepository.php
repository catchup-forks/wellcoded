<?php namespace Modules\Podcast\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Modules\Core\Repositories\BaseRepository;

interface PodcastRepository extends BaseRepository
{
    /**
     * Returns the lastests podcasts available
     *
     * @param int $perPage
     * @return Collection
     */
    public function latests($perPage = 15);
}
