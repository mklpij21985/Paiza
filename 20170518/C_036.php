<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $battle1 = trim(fgets(STDIN));
    $battle2 = trim(fgets(STDIN));
    $battle1_time = trim(fgets(STDIN));
    $final_time = trim(fgets(STDIN));

    $battle1 = explode(" ", $battle1);
    $battle2 = explode(" ", $battle2);
    $battle1_time = explode(" ", $battle1_time);
    $final_time = explode(" ", $final_time);

    $battle1aa = $battle1[0] - 1;
    $battle1bb = $battle1[1] - 1;
    $battle2aa = $battle2[0] - 1;
    $battle2bb = $battle2[1] - 1;

    $i = 0;
    if($battle1_time[$battle1aa] > $battle1_time[$battle1bb])
    {
        $b1win = $battle1[1];
    }
    else
    {
        $b1win = $battle1[0];
    }


    if($battle1_time[$battle2aa] > $battle1_time[$battle2bb])
    {
        $b2win = $battle2[1];
    }
    else
    {
        $b2win = $battle2[0];
    }

    if($b1win < $b2win)
    {
        if($final_time[0] < $final_time[1])
        {
            $winner1 = $b1win;
            $winner2 = $b2win;
        }
        else
        {
            $winner1 = $b2win;
            $winner2 = $b1win;
        }
    }
    else
    {
        if($final_time[0] < $final_time[1])
        {
            $winner1 = $b2win;
            $winner2 = $b1win;
        }
        else
        {
            $winner1 = $b1win;
            $winner2 = $b2win;
        }
    }

    echo "{$winner1}\n{$winner2}";

?>
