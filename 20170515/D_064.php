<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = "aaaFalseaaa";
    $len = strlen($input_lines);
   if($len >= 1 && $len <= 100)
   {
    $a = str_replace("False", "True", "{$input_lines}");
    echo "{$a}";
    }
?>
