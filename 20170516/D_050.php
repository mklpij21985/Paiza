<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $dango = explode(" ", $input_lines);
    if($dango[0] > 5)
    {
        $dango[0] = 5;
    }
    if($dango[1] > 5)
    {
        $dango[1] = 5;
    }

    $daikazoku = $dango[0] + $dango[1];
    echo "$daikazoku";
?>
