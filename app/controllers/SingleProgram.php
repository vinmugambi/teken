<?php

namespace App\Contoller;

use Sober\Controller\Controller;
use App\Traits\Image;

class SingleProjects extends Controller
{
    use Image;
    public function project()
    {

        return (object) [
            "name" => get_field('name', get_the_ID()),
            "url" => get_field('url', get_the_ID()),
            "description" => get_field('description', get_the_ID()),
            "delivery_solution" => get_field('delivery_solution', get_the_ID()),
            "feedback" => get_field('feedback', get_the_ID()),
            "location" => get_field('location', get_the_ID()),
            "sponsors" => get_field('sponsors', get_the_ID()),
            "how_to_sponsor" => get_field('how_to_sponsor', get_the_ID()),
            "image" => $this->getImage(get_the_ID(), "large")
        ];
    }
}
