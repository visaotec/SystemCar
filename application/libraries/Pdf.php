<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once('./dompdf/autoload.inc.php');

/*Esse trecho de código é preciso quando for hospedar*/
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class Pdf {

    function createPDF($html, $filename = '', $download = TRUE, $paper = 'A6', $orientation = 'portrait') {
//        $dompdf = new dompdf\DOMPDF(); //Para localhost
        $dompdf = new Dompdf(); //Para hospedado
        $dompdf->load_html($html);
        $dompdf->set_paper($paper, $orientation);
        $dompdf->render();
        if ($download)
            $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
        else
            $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
    }

}

?>