<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $a = $input_lines - 1;
    echo "Hello ";
    while($input_lines > $i)
    {
        $moji = trim(fgets(STDIN));
        if($i < $a)
        {
        echo "{$moji},";
        }
        $i++;
    }

    echo "{$moji}.";

?>
