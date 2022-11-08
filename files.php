<?php 
$file = fopen (__DIR__.'/file.txt','w');
for ($i = 1; $i <= 100; $i++) {
	fputs($file,$i.PHP_EOL);
}
fclose($file);
?>
