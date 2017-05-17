<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $LorH = 0;
    $low = 0;
    $high = 9999;

    while ($input_lines > $i)
    {
        $LorH = trim(fgets(STDIN));
        $LorH = explode(" ", $LorH);
        if($LorH[0] == "ge")
        {
            if($low < $LorH[1])
            {
                $low = $LorH[1];
            }
        }
        else
        {
            if($high > $LorH[1])
            {
                $high = $LorH[1];
            }
        }

        $i++;
    }
    echo "{$low} {$high}";
?>
