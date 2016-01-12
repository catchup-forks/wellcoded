<?php
/**
 * wellcoded
 *
 * @author Julien Tant - Craftyx <julien@craftyx.fr>
 */

namespace Modules\Podcast\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Podcast\Repositories\PodcastRepository;

class PodcastController extends Controller
{
    public function index(PodcastRepository $podcastRepository)
    {
        return view('podcast::frontend.index', [
            'podcasts' => $podcastRepository->latests()
        ]);
    }

    public function show(PodcastRepository $podcastRepository, $podcastId)
    {
        $podcast = $podcastRepository->find($podcastId);
        if (!$podcast) {
            abort(404, 'Podcast not found');
        }
        return view('podcast::frontend.show', compact('podcast'));
    }

    public function rss(PodcastRepository $podcastRepository)
    {
        return response()->view('podcast::frontend.rss', [
            'podcasts' => $podcastRepository->all()
        ], 200, ['content-type' => 'application/rss+xml']);
    }
}
