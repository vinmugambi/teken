<?php
namespace App;

use Sober\Controller\Controller;

class PageContactUs extends Controller {
   public function authorName(){
       return get_current_user();
   }
}