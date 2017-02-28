<?php
    //$url = 'http://www.anothersite.com';
$url=$_REQUEST['url'];
    $htm = file_get_contents($url);
    echo $htm;
?>
