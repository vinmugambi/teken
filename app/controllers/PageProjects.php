<?php

namespace App;

use App\Traits\Image;
use Sober\Controller\Controller;

class PageProjects extends Controller
{
    use Image;
    public function  projects()
    {
        $args = [
            "post_per_page" => -1,
            "offset" => 0,
            "orderby" => "date",
            "order" => "desc",
            "post_type" => "projects"
        ];
        $the_query = new \WP_Query($args);
        $projects = [];

        if ($the_query->post_count > 0) {
            $projects = array_map(function ($project) {
                return (object) [
                    "image" => $this->getImage($project),
                    "name" => get_field("name", $project),
                    "permalink" => get_post_permalink($project),
                ];
            }, $the_query->posts);
        }

        wp_reset_postdata();

        return $projects;
    }
}
