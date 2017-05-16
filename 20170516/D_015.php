<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $a = $input_lines;

    while($input_lines > $i)
    {
    echo "{$a}\n";
    $a--;
    $i++;
    }
?>
