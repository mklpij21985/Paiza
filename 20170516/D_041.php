<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $book = explode (" ", $input_lines);
    $a = $book[1] * $book[2];
    if($book[0] <= $a)
    {
        echo "OK";
    }
    else
    {
        echo "NG";
    }
?>
