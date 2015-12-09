<?php namespace Modules\Podcast\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item('Podcasts', function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->append('admin.podcast.podcast.create');
                $item->route('admin.podcast.podcast.index');
                $item->authorize(
                    $this->auth->hasAccess('podcast.podcasts.index')
                );
            });
        });

        return $menu;
    }
}
