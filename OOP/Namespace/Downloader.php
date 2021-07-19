<?php

require_once 'Library/Excel/GenerateFile.php';
require_once 'Library/PDF/GenerateFile.php';

use Library\Excel\GenerateFile as Excel;
use Library\PDF\GenerateFile as PDF;

$pdfDownloader = new PDF();
$excelDownloader = new Excel();
