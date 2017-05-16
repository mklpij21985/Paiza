<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $storm_1 = trim(fgets(STDIN));
    $storm_2 = trim(fgets(STDIN));
    $storm_3 = trim(fgets(STDIN));
    $storm_4 = trim(fgets(STDIN));
    $storm_5 = trim(fgets(STDIN));

    $kan_1 = $storm_2 - $storm_1;
    $kan_2 = $storm_3 - $storm_2;
    $kan_3 = $storm_4 - $storm_3;
    $kan_4 = $storm_5 - $storm_4;


    echo "{$kan_1}\n{$kan_2}\n{$kan_3}\n{$kan_4}\n";
?>
