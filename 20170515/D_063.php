<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = [0, 10, 23, 35, 57];
    $input_lines[0][0] = [29];
    $a = explode(" ", $input_lines);

    $ban = 0;

    for($i = 0; $i > 6; $i++)
    {
        if($a[0][0] < $a[$i])
        {
            $ban++;
            echo "{$ban}";
            break;
        }
        else
        {
            $ban = $ban + 1;
        }

    }
?>
