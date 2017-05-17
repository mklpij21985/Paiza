<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $a = 0;

    for($i = 1; $i < 10; $i++)
    {
        $a = $i * $input_lines;
        if($i < 9)
        {
           echo "{$a} ";
        }
        else
        {
            echo "{$a}";
        }
    }

?>
