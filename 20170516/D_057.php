<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines2 = trim(fgets(STDIN));
    $pre = explode(" ", $input_lines2);
    if($input_lines == 3)
    {
    echo "{$pre[2]}";
    }
    elseif ($input_lines == 2)
    {
        echo "{$pre[1]}";
    }
    elseif($input_lines == 1)
    {
        echo "{$pre[0]}";
    }
?>
