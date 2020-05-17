<?php

namespace App\Traits;

trait Image
{
    private function imageApi()
    {
        global $simple_multiple_featured_images;
        return $smfi_api = $simple_multiple_featured_images->get_public_api();
    }

    private function getFeaturedImagesIds($id)
    {
        $featured_images_ids = $this->imageApi()->get_all_featured_image_ids($id);
        if (empty($featured_images_ids)) {
            return false;
        } else return $featured_images_ids;
    }

    private function imageAttributes($image_id, $size)
    {
        return (object) [
            "src" => $this->imageApi()->get_image_url_by_id($image_id, $img_size = $size),
            "alt" => $this->imageApi()->get_image_alt_by_id($image_id)
        ];
    }

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

    protected function getFirstImage($id, $size = "medium")
    {
        if ($this->getFeaturedImagesIds($id) != false) {
            $first_image_id = $this->getFeaturedImagesIds($id)[0];
            return $this->imageAttributes($first_image_id, $size);
        } else return false;
    }

    protected function getFeaturedImages($id, $size = "medium")
    {
        $featured_images_id = $this->getFeaturedImagesIds($id);
        $featured_images = [];
        foreach ($featured_images_id as $image_id) {
            array_push($featured_images, $this->imageAttributes($image_id, $size));
        }
        return $featured_images;
    }
}
