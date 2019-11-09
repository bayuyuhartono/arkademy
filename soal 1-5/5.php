<?php

print_r(createMatrix(3));

function createMatrix($par_numb) {
    for ($i = 0; $i < $par_numb; $i++) {
        $matrix[$i][0] = rand(1,9);
        $matrix[$i][1] = rand(1,9);
        $matrix[$i][2] = rand(1,9);
    }
    
    for ($i = 0; $i < count($matrix); $i++) {
        $diagonal_L[$i] = $matrix[$i][$i];
        $diagonal_R[$i] = $matrix[$i][(count($matrix)-1) - $i];
    }
    
    $result_L = 0;
    $result_R = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        $result_L += $diagonal_L[$i];
        $result_R += $diagonal_R[$i];
    }
    
    $total = $result_L + $result_R;
    $result = "Matrix : ".json_encode($matrix)."\n Total : ".$total;
    return $result;
}

?>