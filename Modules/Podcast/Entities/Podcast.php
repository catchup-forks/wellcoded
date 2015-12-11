<?php namespace Modules\Podcast\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Modules\Media\Support\Traits\MediaRelation;
use Modules\Podcast\Presenters\Podcast as PodcastPresenter;

class Podcast extends Model
{
    use Translatable, MediaRelation, PresentableTrait;

    protected $table = 'podcast__podcasts';
    public $translatedAttributes = ['title', 'description', 'tags'];
    protected $guarded = [];
    protected $dates = ['published_at'];
    protected $presenter = PodcastPresenter::class;
}
