<?php namespace Modules\Podcast\Repositories\Eloquent;

use Modules\Podcast\Repositories\PodcastRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentPodcastRepository extends EloquentBaseRepository implements PodcastRepository
{

    public function latests($perPage = 15)
    {
        return $this->model
            ->with('files')
            ->where('published_at', '<', date('Y-m-d H:i:s'))
            ->orderBy('published_at', 'desc')
            ->paginate($perPage);
    }

    public function all()
    {
        return $this->model->orderBy('published_at', 'desc')->get();
    }

    public function create($data)
    {
        $data['published_at'] = $data['published_at'] ?: date('Y-m-d H:i:s');

        return parent::create($data);
    }


}
