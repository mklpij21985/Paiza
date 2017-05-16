<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $kama = explode(" ", $input_lines);
    $a = $kama[0] ** 3;
    $b = $kama[1] ** 3;
    $c = $a - $b;
    echo "$c";
?>
