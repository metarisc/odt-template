<?php

require __DIR__.'/../vendor/autoload.php';

use Metarisc\OdtParser\Parser;

// Ensure the file path is correct
$pages = require __DIR__.'/fixtures.php';

const filePath = __DIR__.'/../tests/template.odt';
if (!file_exists(filePath)) {
    throw new RuntimeException('File not found: '.filePath);
}

$parser  = new Parser();
$content = $parser->parse(filePath, $pages);
var_dump($content);
$datetime = (new DateTime())->format(\DATE_ATOM);
$content->saveAsFile(__DIR__.'/../tests/output'.$datetime.'.odt')->close();
