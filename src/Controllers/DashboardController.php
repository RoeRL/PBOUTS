<?php

namespace App\Controllers;

use App\Controller;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $this->render('dashboard');
    }
}
