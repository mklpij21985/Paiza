<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $moji = explode(" ", $input_lines);
    $a = $moji[0];
    $b = $moji[1] - 1;
    if($b < 0)
    {
        $b = 0;
    }

    echo "{$a[$b]}";
?>
