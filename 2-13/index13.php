<?php
    // ceil
    $x = 6.3;
    echo ceil($x);
    echo "切り上げ";
    echo '<br>';
    // floor
    $x = 7.5;
    echo floor($x);
    echo "切り捨て";
    echo '<br>';
    // round
    $x = 7.1;
    echo round($x);
    echo "四捨五入";
    echo '<br>';
   // pi
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
        echo "円周率";
    }
    circleArea(5);
    echo '<br>';
    // mt_rand
    echo mt_rand(1, 150);
    echo "乱数（ガチャ）";
    echo '<br>';
    // strlen
    $x = "akasatana";
    echo strlen($x);
    echo "文字列の長さ";
    echo '<br>';
    // strpos
    $x = "akasatana";
    echo strpos($x, "a");
    echo "検索";
    echo '<br>';
    // substr
    $x = "akasatana";
    echo substr($x, -2, 2);
    echo "切り取り";
    echo '<br>';
    // str_replace
    $x = "akasatana";
    echo str_replace("a", "A", $x);
    echo "置換";
    echo '<br>';
    // printf
    $name = "タロウ";
    $limit_number = 40;
    printf("%sの残金は残り%d円です", $name, $limit_number);
    echo '<br>';
    // sprintf
    $limit_hour = 4;
    $limit_minute = 4;
    $limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
    echo $limit_time;