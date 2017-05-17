<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $j = mb_strtolower($input_lines);

     if($j == "a")
    {
        echo "1";
    }
    else
    {

    while($j <> "z")
    {
        $j++;
        $i++;
    }
        $i = 26 - $i;
        echo "{$i}";
    }

?>
