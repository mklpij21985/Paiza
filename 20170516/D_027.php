<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 1;
    $a = 0;
    while($input_lines >= $i)
    {
        $a = $a +$i;
        $i++;
    }
echo "{$a}";
?>
