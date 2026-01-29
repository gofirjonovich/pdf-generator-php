PHP PDF Generator

A simple PDF generator built with PHP and Dompdf.
Converts HTML templates into PDF files using a clean project structure.

Features

Generate PDF from HTML

Page numbering support

UTF-8 compatible fonts

Preview or download PDFs

Separated view and PDF logic

Project Structure
pdf-generator/
├─ app/
│  ├─ Pdf/
│  │  └─ PdfGenerator.php
│  └─ Views/
│     └─ invoice.php
├─ public/
│  └─ index.php
├─ storage/
│  └─ pdf/
├─ vendor/
├─ composer.json
└─ README.md

Requirements

PHP 7.4 or higher

Composer

Dompdf

Installation

Clone the repository

git clone https://github.com/your-username/pdf-generator.git
cd pdf-generator


Install dependencies

composer install


Generate autoload files

composer dump-autoload

Running the Project

Start a local server:

php -S localhost:8000 -t public


Open in browser:

http://localhost:8000

How It Works

invoice.php contains only HTML and variables

PdfGenerator.php handles all PDF generation logic

index.php acts as the entry point

Page numbers are added after rendering using Dompdf’s canvas API.

License

MIT