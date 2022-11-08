<?php 
$file = fopen (__DIR__.'/file.txt','a');

	fputs($file,'abc');
fclose($file);
?>
