<?php namespace Modules\Podcast\Http\Controllers\Admin;

use Theme;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Media\Repositories\FileRepository;
use Modules\Podcast\Entities\Podcast;
use Modules\Podcast\Repositories\PodcastRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PodcastController extends AdminBaseController
{
    /**
     * @var PodcastRepository
     */
    private $podcast;

    public function __construct(PodcastRepository $podcast)
    {
        parent::__construct();

        $this->assetManager->addAsset('moment.js', Theme::url('vendor/admin-lte/plugins/daterangepicker/moment.min.js'));
        $this->assetPipeline->requireCss('daterangepicker.css');
        $this->assetPipeline->requireJs('moment.js');
        $this->assetPipeline->requireJs('daterangepicker.js');

        $this->podcast = $podcast;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $podcasts = $this->podcast->all();

        return view('podcast::admin.podcasts.index', compact('podcasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('podcast::admin.podcasts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->podcast->create($request->all());

        flash()->success(trans('core::core.messages.resource created', ['name' => trans('podcast::podcasts.title.podcasts')]));

        return redirect()->route('admin.podcast.podcast.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Podcast $podcast
     * @return Response
     */
    public function edit(Podcast $podcast, FileRepository $fileRepository)
    {
        $audioFile = $fileRepository->findFileByZoneForEntity('audioFile', $podcast);

        return view('podcast::admin.podcasts.edit', compact('podcast', 'audioFile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Podcast $podcast
     * @param  Request $request
     * @return Response
     */
    public function update(Podcast $podcast, Request $request)
    {
        $this->podcast->update($podcast, $request->all());

        flash()->success(trans('core::core.messages.resource updated', ['name' => trans('podcast::podcasts.title.podcasts')]));

        return redirect()->route('admin.podcast.podcast.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Podcast $podcast
     * @return Response
     */
    public function destroy(Podcast $podcast)
    {
        $this->podcast->destroy($podcast);

        flash()->success(trans('core::core.messages.resource deleted', ['name' => trans('podcast::podcasts.title.podcasts')]));

        return redirect()->route('admin.podcast.podcast.index');
    }
}
