<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $pira = 0;
    $dan = 1;

    while($input_lines > $i)
    {
        $pira = $pira + $dan;
        $dan++;
        $i++;
    }
    echo $pira;
?>
