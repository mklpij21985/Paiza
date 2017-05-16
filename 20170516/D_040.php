<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines[0] = fgets(STDIN);
    $input_lines[1] = fgets(STDIN);
    $input_lines[2] = fgets(STDIN);
    $input_lines[3] = fgets(STDIN);
    $input_lines[4] = fgets(STDIN);
    $input_lines[5] = fgets(STDIN);
    $input_lines[6] = fgets(STDIN);
    $odekake = 0;

    for($i = 0; $i < 7; $i++)
    {
        if($input_lines[$i] <= 30)
        {
            $odekake++;
        }
    }
    echo "{$odekake}";
?>
