<?php

require_once 'classes/file.php';

$file =  new File(__DIR__ . '/file.txt');
$file->write('строка 1');
$file->write('строка 2');
$file->write('строка 3');
$file->write('строка 4');
