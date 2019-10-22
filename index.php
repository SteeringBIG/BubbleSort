<?php
    echo '<pre>';

    $mass = array();
    $massCount = 9;
    $nStart = 0;
    $nEnd = 100;
    $key=0;
    while ($key++ < $massCount) {
        $mass[$key] = rand($nStart, $nEnd);
    }

    echo '<br>' . print_r($mass) . '<br>';

    $key = $massCount;
    $keySort = 1;
    $i = 0;
    while ($i++ < $keySort) {
        $mass = sortArray($mass, $key, $keySort);
    }

    //echo $massCount;
    echo '<br>' . print_r($mass);

    echo '</pre>';

    function sortArray($mass, $key, $keySort)
    {
        while ($key > $keySort) {
            //echo '<br>' . $mass[$key];
            $keyA = $key;
            $keyB = $key - 1;
            $a = $mass[$keyA];
            $b = $mass[$keyB];

            if ($a < $b){
                $mass[$key] = $b;
                $mass[$key - 1] = $a;
            }

            $key = $key - 1;
        }
        return $mass;
    }
?>