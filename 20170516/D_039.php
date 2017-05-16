<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines_1 = trim(fgets(STDIN));
    $input_lines_2 = trim(fgets(STDIN));
    $input_lines_3 = trim(fgets(STDIN));

    if($input_lines_1 == $input_lines_2)
    {
        if($input_lines_2 == $input_lines_3)
        {
            echo "YES";
        }
    }
    else
    {
        echo "NO";
    }
?>
