<?php
/**
 * wellcoded
 *
 * @author Julien Tant - Craftyx <julien@craftyx.fr>
 */

namespace Modules\Podcast\Presenters;


use Laracasts\Presenter\Presenter;

class Podcast extends Presenter
{
    public function slug()
    {
        return str_slug($this->entity->title);
    }

    public function published_at()
    {
        return $this->entity->published_at->format('d/m/Y');
    }

    public function excerpt()
    {
        $matches = [];
        preg_match("/<p.*?>(.*?)<\/p>/is", $this->entity->description, $matches);

        return array_get($matches, '1', '');
    }

    public function url()
    {
        return route('podcasts.show', [$this->entity->id, $this->slug()]);
    }

    public function mp3url()
    {
        return asset($this->entity->files->first()->path);
    }
}
