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
}