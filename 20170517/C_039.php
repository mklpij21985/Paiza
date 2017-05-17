<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $siki = explode("+", $input_lines);
    $a = 0;
    $b = 0;
    $sam = 0;


    for($i = 0; $i < count($siki); $i++)
    {

            $a = mb_substr_count($siki[$i], "/");
            $a = $a * 1;
            $b = mb_substr_count($siki[$i], "<");
            $b = $b * 10;
            $sam = $sam + $a + $b;

    }
        echo "{$sam}";
?>
