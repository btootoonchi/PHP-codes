<?php 

$handle = fopen('names.txt', 'w');
fwrite($handle, 'Babak'."\n");
fwrite($handle, 'Hamed');
fclose($handle);

?>