<?php

namespace App\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function Login()
    {
        $this->render('login');
    }
}
