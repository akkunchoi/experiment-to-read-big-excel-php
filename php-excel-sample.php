<?php

require __DIR__ . '/vendor/autoload.php';

//require_once dirname(__FILE__) . '/PHPExcel/IOFactory.php';

$filePath = './file.xlsx';

/*
$cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
$cacheSettings = array('dir' => '/tmp', 'memoryCacheSize' => '1G');
if (!PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings)) {
  die ('Can not set PHPExcel cache storage setting');
}
 */

$objPExcel = PHPExcel_IOFactory::load($filePath);

$sheet = $objPExcel->getActiveSheet();

$count = 0;
foreach ($sheet->getRowIterator() as $row) {
  $count++;
  var_dump($row, $count);
}

var_dump('done');

