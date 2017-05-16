<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $move = explode(" ", $input_lines);
    $a = 0;

    $a = $move[0] - $move[1];


    echo "{$a}";
?>
