<?php
    echo '<pre>';

    $start = microtime(true);
    $mass = CreateArray();
    $massCount = count($mass);
    $time = microtime(true) - $start;
    echo '<br>Время создания массива из ' . $massCount . ' элементов: ' . $time . '<br>';

    //==== 1 ====================================
    $start = microtime(true);
    $i = 0;
    while ($i++ < $massCount) {
        $mass1 = sortArray($mass, $massCount, $i);
    }
    $time = microtime(true) - $start;
    echo '<br>Время выполнение сортировки 1: ' . $time . '<br>';
    //echo '<br>' . print_r($mass1);

    //==== 2 ====================================
    $start = microtime(true);
    $mass2 = BubbleSort($mass);
    $time = microtime(true) - $start;
    echo '<br>Время выполнение сортировки 2: ' . $time . '<br>';
    //echo '<br>' . print_r($mass2);

    //========================================
    echo '</pre>';
    //========================================

    function sortArray($mass, $massCount, $i)
    {
        $key = $massCount;
        while ($key > $i) {
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
        //echo '<br>' . print_r($mass);
        return $mass;
    }

    function BubbleSort($arr)
    {

        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }
        return $arr;
    }

    function CreateArray()
    {
        $mass = array();
        $massCount = 10000;
        $nStart = 0;
        $nEnd = 100;
        $key=0;
        while ($key++ < $massCount) {
            $mass[$key] = rand($nStart, $nEnd);
        }
//        echo '<br>' . print_r($mass) . '<br>';
//        echo '<br>-------<br>';
        return $mass;
    }
?>