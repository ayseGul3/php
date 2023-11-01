<?php

 $array = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function arrayClear($arr,$number){
    $new_array = array_filter($arr);
    $rand_keys = array_rand($new_array, $number);
    $rand_array=[];
    if(is_array($rand_keys)){
        foreach ($rand_keys as $key){
            $rand_array[]= $new_array[$key];
        }
    }
    else{
        $rand_array[]= $new_array[$rand_keys];

    }

    return $rand_array;

}
echo "<pre>";
print_r(arrayClear($array,5));
print_r(arrayClear($array,2));
print_r(arrayClear($array,6));
print_r(arrayClear($array,3));

?>