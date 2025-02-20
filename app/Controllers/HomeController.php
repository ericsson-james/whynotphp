<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Views\View;

class HomeController
{
    public function index(): string
    {
        // Do any logic you want: fetch from database, process forms, etc.
        // For now, just load the "home" view.
        return View::render('home', [
            'pageTitle' => 'PHP Security',
            'content'   => 'Welcome to the PHP website about insecure PHP!'
        ]);
    }

    public function about(): string
    {
        return View::render('home', [
            'pageTitle' => 'About PHP Security',
            'content'   => 'All the reasons PHP can be a bit insecure (irony included).'
        ]);
    }
}
