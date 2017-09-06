<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function pdf_create($html, $filename, $stream = TRUE)
{

    require_once(APPPATH . 'helpers/mpdf/mpdf.php');

    $mpdf = new mPDF();

    //$mpdf->SetAutoFont();
     $mpdf->AddPage('P', // L - landscape, P - portrait
            '', '', '', '',
            4, // margin_left
            4, // margin right
            4, // margin top
            4, // margin bottom
            4, // margin header
            4); // margin footer

    $mpdf->WriteHTML($html);

    if ($stream)
    {
        $mpdf->Output($filename . '.pdf', 'I');
    }
    else
    {
        $mpdf->Output('./uploads/temp/' . $filename . '.pdf', 'F');
        
        return './uploads/temp/' . $filename . '.pdf';
    }
}

?>