<?php

$dir    = '/';
$files1 = scandir($dir);
print_r($files1);

for($i=0;$i<count($files1);$i++){
  $dir    = '/'.$files1[$i];
  $files2 = scandir($dir);
  print_r($files2);
  echo "<br>";
}
?>
