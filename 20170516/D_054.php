<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = strlen($input_lines);
    $b = 0;

    if($a >= 11)
    {
        echo "OK";
    }
    else
    {
        $b = 11 - $a;
        echo "{$b}";
    }
?>
