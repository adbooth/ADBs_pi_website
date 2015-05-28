<?php
$it = new DirectoryIterator(dirname(__FILE__) . '/posts/');
foreach($it as $fileInfo){
    if(!$fileInfo->isDot() && !$fileInfo->isDir()){
        echo '<p>' . $fileInfo . "</p>";
    }
}
?>
