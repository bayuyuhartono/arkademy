<?php

print_r(printWords('ARKADEMY'));

function printWords($par_text) {
    $vox = '';
    $conso = '';
    $splitext = str_split($par_text);
    foreach ($splitext as $row) {
        if(preg_match('/^[AIUEO]/', $row[0])) {
            $vox .= $row[0];
        } else {
            $conso .= $row[0];
        }
        $result = $vox.$conso;
    }
    return $result;
}

?>