<?php namespace Modules\Podcast\Composers;

use Illuminate\Contracts\View\View;
use Modules\Podcast\Repositories\PodcastRepository;

class PodcastsComposer
{
    /**
     * @var PodcastRepository
     */
    private $podcastRepository;

    public function __construct(PodcastRepository $podcastRepository)
    {
        $this->podcastRepository = $podcastRepository;
    }

    public function compose(View $view)
    {
        $view->with('podcasts', $this->podcastRepository->allPublished());
    }
}
