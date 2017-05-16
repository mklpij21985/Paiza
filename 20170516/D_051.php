<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $huku = explode(" ", $input_lines);
    $i = 0;
    $win = 0;
    $sam = 0;

    while(10 > $i)
    {
        if($huku[$i] == "W")
        {
            $win++;
        }
        else
        {
            $sam++;
        }
        $i++;
    }

    if($win >= 5)
    {
        echo "OK";
    }
    else
    {
        echo "NG";
    }
?>
