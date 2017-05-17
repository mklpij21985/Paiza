<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $kyori = explode(" ", $input_lines);
    $a = 0;

    if($kyori[1] == "km")
    {
        $a = $kyori[0] * 1000000;
        echo "{$a}";

    }
    elseif($kyori[1] == "m")
    {
        $a = $kyori[0] * 1000;
        echo "{$a}";

    }
    elseif($kyori[1] == "cm")
    {
        $a = $kyori[0] * 10;
        echo "{$a}";

    }
    else
    {
    echo "{$a}";
    }
?>
