<?php

function triangele($value){

    for($i=1; $i <= $value; $i++){
        echo str_repeat("*", $i) ."<br>";
    }
}
triangele(15);

?>