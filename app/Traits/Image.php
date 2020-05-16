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

    protected function getFeaturedImages($id, $size = "medium")
    {
        global $simple_multiple_featured_images;
        $smfi_api = $simple_multiple_featured_images->get_public_api();
        $featured_images_id = $smfi_api->get_all_featured_image_ids($id);

        $featured_images = [];

        foreach ($featured_images_id as $image_id) {
            array_push($featured_images,  [
                "src" => $smfi_api->get_image_url_by_id($image_id, $img_size = $size),
                "alt" => $smfi_api->get_image_alt_by_id($image_id)
            ]);
        }
        return $featured_images;
    }

    protected function listGlobal()
    {
        ksort($GLOBALS);
        echo '<ol>';
        echo '<li>' . implode('</li><li>', array_keys($GLOBALS)) . '</li>';
        echo '</ol>';
    }
}
