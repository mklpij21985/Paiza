<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $hosu = explode(" ", $input_lines);

    if($hosu[0] > $hosu[1] && $hosu[0] > $hosu[2])
    {

            echo $hosu[0];

    }
    elseif ($hosu[0] < $hosu[1] && $hosu[1] > $hosu[2])
    {
        echo $hosu[1];

    }
    else
    {
        echo $hosu[2];
    }

?>
