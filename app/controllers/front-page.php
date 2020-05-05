<?php

// Data available in the Front Page view

namespace App\Contoller;

use PageProjects;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
   public function programs(){
       $projects = new PageProjects();
       return $projects->projects();
   }
}
