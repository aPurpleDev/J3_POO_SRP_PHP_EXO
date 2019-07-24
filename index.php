<?php

use Reporting\Report;
use Reporting\Formats;
use Reporting\Formats\HTMLFormat;
use Reporting\Formats\JSONFormat;
use Reporting\Interfaces\iFormat;

spl_autoload_register(function ($className) {
    // Attention, avec ce principe, vos dossiers et noms de fichiers doivent
    // correspondre exactement aux Namespaces et aux noms de classes
    $className = str_replace("\\", "/", $className);
    require_once($className . ".php");
});

$report = new Reporting\Report('2016-04-21', 'Titre de mon rapport');

$HTMLreport = new HTMLFormat($report->getContents());
$HTMLreport->formatData();

$JSONreport = new JSONFormat($report->getContents());
$JSONreport->formatData();

echo $HTMLreport->formatData();
echo $JSONreport->formatData();

echo '<hr>';
