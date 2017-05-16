<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = 0;
    if($input_lines == 0)
    {
    echo "1";
    }
    else
    {
     $a = $input_lines * 3;
     echo "{$a}";
    }

?>
