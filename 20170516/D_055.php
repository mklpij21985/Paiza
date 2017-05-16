<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $copy = explode(" ", $input_lines);

    $a = "Best in";
    $b = " ";

    echo "{$a}{$b}{$copy[0]}{$b}{$copy[1]}";
?>
