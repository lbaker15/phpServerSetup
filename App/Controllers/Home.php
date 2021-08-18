<?php

namespace App\Controllers;
use \Core\View;

class Home extends \Core\Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [
            'name'    => 'Dave',
            'colours' => ['red', 'pink', 'blue']
        ]);
    }
}
