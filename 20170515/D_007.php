<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);

        while($input_lines > 0 && $input_lines <= 100)
        {
            echo "*";
            $input_lines = $input_lines - 1;
        }

?>
