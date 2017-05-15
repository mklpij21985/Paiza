<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = 200;
    $a = floor($input_lines / 100);

    if($input_lines >= 100 && $input_lines <= 999 && $a == 2)
    {
        echo "ok";

    }elseif ($input_lines >= 100 && $input_lines < 1000 && $a == 4)
    {
        echo "error";
    }else
    {
    echo "unknown";
    }
?>
