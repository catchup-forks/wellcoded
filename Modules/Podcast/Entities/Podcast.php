<?php namespace Modules\Podcast\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Podcast extends Model
{
    use Translatable, MediaRelation;

    protected $table = 'podcast__podcasts';
    public $translatedAttributes = ['title', 'description', 'tags'];
    protected $guarded = [];
}
