<?php

$dir    = '/app';
$files1 = scandir($dir);
print_r($files1);

for($i=0;$i<count($files1);$i++){
  $dir    = '/app/'.$files1[$i];
  $files2 = scandir($dir);
  echo "<hr><b>".$dir."</b>";
  print_r($files2);
  echo "<br>";
}
?>
