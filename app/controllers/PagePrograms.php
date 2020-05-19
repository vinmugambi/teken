<?php

namespace App\Controller;

use App\Traits\Image;
use Sober\Controller\Controller;

class PagePrograms extends Controller
{
    use Image;
    public function  programs()
    {
        $args = [
            "post_per_page" => -1,
            "offset" => 0,
            "orderby" => "date",
            "order" => "desc",
            "post_type" => "program"
        ];
        $the_query = new \WP_Query($args);
        $programs = [];

        if ($the_query->post_count > 0) {
            $programs = array_map(function ($program) {
                return (object) [
                    "image" => $this->getFirstImage($program->ID),
                    "name" => $program->post_title,
                    "permalink" => get_post_permalink($program),
                ];
            }, $the_query->posts);
        }

        wp_reset_postdata();

        return $programs;
    }
}
