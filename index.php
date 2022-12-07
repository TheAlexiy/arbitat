<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-type: text/html; charset=utf-8');

require 'db.php';
require('phpQuery/phpQuery/phpQuery.php');
const HOST = 'http://www.arbitat.ru';

$data_site = file_get_contents(HOST);
$document = phpQuery::newDocument($data_site);
$content_prev = $document->find('.grid .gridRow td');
$text = pq($content_prev)->text();
$text = htmlentities($text, null, 'utf-8');
$text = str_replace("&nbsp;", " ", $text);
$text = html_entity_decode($text);
$text = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $text);

$file = fopen('sandbox.txt', 'w');
fwrite($file, $text);
fclose($file);

$file = fopen('sandbox.txt', 'r');
$lot = 0;
$data[][] = array();
while (!feof($file)) {
    for ($i = 0; $i < 10; $i++) {
        $data[$lot][$i] = trim(fgets($file));
    }
    $lot++;
}
fclose($file);
echo $data[0][0];



