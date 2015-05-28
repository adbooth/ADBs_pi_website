<?php
require_once 'libs/Parsedown.php';
$parsedown = new Parsedown();
$text = file_get_contents('res/about.md');
echo $parsedown->text($text);
?>
