<?php

    $mass = array();
    $massCount = 20;
    $nStart = 0;
    $nEnd = 100;
    $x=0;
    while ($x++ < $massCount) {
        $mass[$x] = rand($nStart, $nEnd);
    }


    echo print_r($mass);
function
?>