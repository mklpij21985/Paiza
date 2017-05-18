<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $s_count = 0;
    $b_count = 0;

    while($i < $input_lines)
    {
        $toukyu = trim(fgets(STDIN));
        if($toukyu == "strike" && $s_count < 2)
        {
            echo "strike!\n";
            $s_count++;
        }
        elseif ($toukyu == "strike" && $s_count == 2)
        {
            echo "out!\n";
            $s_count++;
        }

        if($toukyu == "ball" && $b_count < 3)
        {
            echo "ball!\n";
            $b_count++;
        }
        elseif($toukyu == "ball" && $b_count == 3)
        {
            echo  "fourball!\n";
            $b_count++;
        }
        $i++;
    }
?>
