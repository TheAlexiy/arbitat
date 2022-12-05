<?php
require 'db.php';
require('phpQuery/phpQuery/phpQuery.php');
const HOST = 'http://www.arbitat.ru';

$data_site = file_get_contents(HOST);
$document = phpQuery::newDocument($data_site);
$content_prev = $document->find("");

//изучаю как пользоваться PhpQuery и парсить информацию

header('Location: save.php');