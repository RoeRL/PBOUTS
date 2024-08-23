<?php

namespace App\Models;
use Dompdf\Dompdf;


class Pdfku{
    public static function MakePDF(){
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
