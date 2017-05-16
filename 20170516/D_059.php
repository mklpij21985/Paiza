<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $tra = explode(" ", $input_lines);

    if($tra[0] == "J" && $tra[1] == "J")
    {
        $tra[1] = "Q";
        echo "{$tra[0]} {$tra[1]}";
    }
    else
    {
        echo "{$tra[0]} {$tra[1]}";
    }
?>
