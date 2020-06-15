<?php

// Data available in the Front Page view

namespace App\Contoller;

use PagePrograms;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function programs()
    {
        $projects = new PagePrograms();
        return array_slice($projects->programs(), 0 , 4);
    }
}
