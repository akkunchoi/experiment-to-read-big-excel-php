<?php

require __DIR__ . '/vendor/autoload.php';

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

$reader = ReaderFactory::create(Type::XLSX); // for XLSX files
//$reader = ReaderFactory::create(Type::CSV); // for CSV files
//$reader = ReaderFactory::create(Type::ODS); // for ODS files

$filePath = './file.xlsx';

$reader->open($filePath);

$rows = 0;

foreach ($reader->getSheetIterator() as $sheet) {
    foreach ($sheet->getRowIterator() as $row) {
      $rows++;
      var_dump($rows);
//      var_dump($row);
    }
}

var_dump('done');

$reader->close();
