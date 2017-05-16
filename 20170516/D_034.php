<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = 21 % $input_lines;
    if($a == 0)
    {
        $a = $input_lines;
    }

    echo "$a";
?>
