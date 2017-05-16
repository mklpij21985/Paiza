<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $san = explode(" ", $input_lines);
    $a = 0;
    $b = 0;
    $c = 0;

    while($san[0] > $a)
    {
    echo "A";
    $a++;
    }
    while($san[1] > $b)
    {
    echo "B";
    $b++;
    }
    while($san[2] > $c)
    {
    echo "A";
    $c++;
    }
?>
