<?php

namespace App\Traits;

trait Image
{
    protected function getImage($id, $size = "medium")
    {
        $project_image = get_field("image", $id);

        return (object) [
            "alt" => $project_image["alt"],
            "caption" => $project_image["title"],
            "src" => $project_image["sizes"][$size],
            "width" => $project_image["sizes"][$size . "-width"],
            "height" => $project_image["sizes"][$size . "-height"],
        ];
    }
}
