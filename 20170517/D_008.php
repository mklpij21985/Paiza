<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = 0;
    $a = $input_lines % 2;

    if($a == 0)
    {
        echo "even";
    }
    else
    {
        echo "odd";
    }

?>
