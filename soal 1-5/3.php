<?php 
$arr = [1,2,3,4,5,6];

print_r(thirdHighest($arr));

function thirdHighest($array, $n = 3) {
    if (!is_array($array)) {
        $result = 'Parameter should be an array'; 
    } elseif (count($array) < 3) {
        $result = 'Minimal array length is 3'; 
    } else {
        $notarray = 0;
        for ($i = 0; $i < count($array); $i++) {
            $check = strlen(preg_replace('/[^0-9]+/', '', $array[$i]));
            if ($check != strlen($array[$i])) {
                $notarray++ ;
            }
        }
        
        if ($notarray != 0) {
            $result = 'Array should be number';
        } else {
            asort($array);
            $result = array_slice(array_reverse($array, true),0,$n, true);
            $result = min($result);
        }
    }
    return $result;
}

?>