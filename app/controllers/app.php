<?php

// Global data available in all views extending app.blade.php

namespace App\Controller;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function currentTemplate()
    {
        return basename(get_page_template(), '.blade.php');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function glideImage()
    {
        return str_replace('/app/uploads/', '/img/', get_the_post_thumbnail_url());
    }

    public function navbarMenuItems()
    {
        $menu = wp_get_nav_menu_items(get_nav_menu_locations()["primary_navigation"]);
        $filtered = array_map(function ($menuItem) {
            return (object) [
                "title" => $menuItem->title,
                "url" => $menuItem->url,
                "order" => $menuItem->menu_order
            ];
        }, $menu);
        return $filtered;
    }
}
