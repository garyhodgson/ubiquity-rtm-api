<?php
header('Content-type: application/xml');
$handle = fopen("http://www.rememberthemilk.com/atom/gary.hodgson/4830019/", "r");

if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
