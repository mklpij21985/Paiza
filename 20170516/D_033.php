<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $name = explode(" ", $input_lines);
    $a = substr("{$name[0]}", 0, 1);
    $b = substr("{$name[1]}", 0, 1);


    echo "{$a}.{$b}";
?>
