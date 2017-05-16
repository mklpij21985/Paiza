<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = explode(" ", $input_lines);
    $x = floor($a[0] / $a[1]);
    $y = $a[0] % $a[1];

    echo "{$x} {$y}";
?>
