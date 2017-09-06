<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function pdf_create($html, $filename, $stream = TRUE)
{

    require_once(APPPATH . 'helpers/mpdf/mpdf.php');

    $mpdf = new mPDF();

    //$mpdf->SetAutoFont();
     $mpdf->AddPage('L', // L - landscape, P - portrait
            '', '', '', '',
            2, // margin_left
            2, // margin right
            2, // margin top
            2, // margin bottom
            2, // margin header
            2); // margin footer

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