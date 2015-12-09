<?php namespace Modules\Podcast\Entities;

use Illuminate\Database\Eloquent\Model;

class PodcastTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'description', 'tags'];
    protected $table = 'podcast__podcast_translations';
}
