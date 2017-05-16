<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $a = 0;
    while(7 > $i)
    {
        if($input_lines == "no")
        {
        $a++;
        }
        $i++;
        $input_lines = trim(fgets(STDIN));
    }
    echo "{$a}";
?>
