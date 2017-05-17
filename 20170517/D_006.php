<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $tousa = explode(" ", $input_lines);
    $a = $tousa[0];

    for($i = 0; $i < 10; $i++)
    {
        if($i < 9)
        {
            echo "{$a} ";
        }
        else
        {
            echo "{$a}";
        }
        $a = $a + $tousa[1];
    }
    echo "\n";
?>
