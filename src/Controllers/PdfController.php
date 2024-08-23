<?php

namespace App\Controllers;

use App\Controller;

class PdfController extends Controller
{
    public function PDF()
    {
        $this->render('pdf');
    }
}
