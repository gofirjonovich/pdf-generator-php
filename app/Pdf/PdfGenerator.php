<?php

namespace App\Pdf;

use Dompdf\Dompdf;

class PdfGenerator
{
    private Dompdf $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf([
            'isRemoteEnabled' => true
        ]);
    }

    public function generate(string $html, string $filename, bool $download = false)
{
    $this->dompdf->loadHtml($html);
    $this->dompdf->setPaper('A4', 'portrait');
    $this->dompdf->render();

    $canvas = $this->dompdf->getCanvas();
    $canvas->page_text(
        270,
        820,
        "Page {PAGE_NUM} of {PAGE_COUNT}",
        null,
        9,
        [120, 120, 120]
    );

    $this->dompdf->stream($filename, [
        "Attachment" => $download
    ]);
}


    public function save(string $html, string $path)
    {
        $this->dompdf->loadHtml($html);
        $this->dompdf->render();

        file_put_contents($path, $this->dompdf->output());
    }
}
