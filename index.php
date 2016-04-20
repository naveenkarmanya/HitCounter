<?php

$filename = 'hitcounter.txt';

function autoinc_count() {
    global $filename;
    $current = (file_exists($filename)) ? file_get_contents($filename) : 0;

    $count=file_put_contents($filename, ++$current);
    echo $current;
    
}

autoinc_count();
?> 
