<?php

namespace App\Controllers;

use App\Controller;

class UsersController extends Controller
{
    public function Users()
    {
        $this->render('users');
    }
}
