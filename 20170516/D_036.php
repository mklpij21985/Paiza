<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines = str_replace("at", "@", "{$input_lines}");
    echo "{$input_lines}";
?>
