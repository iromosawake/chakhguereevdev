<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfService
{
    private Dompdf $domPDf;

    public function __construct()
    {
        $this->domPDf = new Dompdf();
        $this->domPDf->setPaper('A4', 'landscape');
        $options = new Options();
        //$options->set('defaultFont', 'Courier');
        $options->set('isRemoteEnabled', true);
        $this->domPDf = new Dompdf($options);
    }

    public function pdf($html)
    {
        $this->domPDf->loadHtml($html);
        // Render the HTML as PDF
        $this->domPDf->render();
        // Output the generated PDF to Browser
        $this->domPDf->stream("programme.pdf",
            ['Attachement' => false]
        );
    }

    public function generateBinaryPDF($html)
    {
        $this->domPDf->loadHtml($html);
        $this->domPDf->render();
        $this->domPDf->stream("programme.pdf",
            ['Attachement' => false]
        );
    }
}