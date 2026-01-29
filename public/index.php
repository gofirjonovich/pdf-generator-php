<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Pdf\PdfGenerator;

$name   = "Dilshodbek";
$amount = 299.99;
$date   = date('Y-m-d');

ob_start();
include __DIR__ . '/../app/Views/invoice.php';
$html = ob_get_clean();

$pdf = new PdfGenerator();
$pdf->generate($html, "invoice.pdf", false);
