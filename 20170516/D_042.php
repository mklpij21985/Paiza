<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines_1 = trim(fgets(STDIN));
    $input_lines_2 = trim(fgets(STDIN));
    $retsu_1 = explode(" ", $input_lines_1);
    $retsu_2 = explode(" ", $input_lines_2);

    $a = 0;
    $b = 0;
    $c = 0;


    $a = $retsu_1[0] * $retsu_2[1];
    $b = $retsu_1[1] * $retsu_2[0];
    $c = $a - $b;

    echo "{$c}";
?>
