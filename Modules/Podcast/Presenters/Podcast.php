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
}