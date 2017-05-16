<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    if($input_lines >= 100)
    {
        echo "{$input_lines}";
    }
    elseif ($input_lines >= 10 && $input_lines < 100)
    {
        echo "0{$input_lines}";
    }
    else
    {
    echo "00{$input_lines}";
    }
?>
