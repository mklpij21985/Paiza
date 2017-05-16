<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a[0] = 0;

    for($i = 0; $i < 5; $i++)
    {
        $a[$i] = $input_lines;
        $input_lines = trim(fgets(STDIN));
    }

    echo  max($a) . "\n";
    echo  min($a);
?>
