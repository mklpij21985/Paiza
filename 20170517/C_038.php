<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $kikai = explode(" ", $input_lines);
    $i = 0;
    $kikaicount = 1;
    $youki = 0;
    $amari = 0;
    $amarimin = 999999;
    $youkimax = 0;
    $saikou = 0;

    while($i < $kikai[0])
    {
        $youki = trim(fgets(STDIN));
        $amari = $kikai[1] % $youki;
        if($amari <= $amarimin)
        {
            $amarimin = $amari;
            $youkimax = $youki;
            $saikou = $kikaicount;
        }
        elseif($amari <= $amarimin && $youkimax < $youki)
        {
            $amarimin = $amari;
            $youkimax = $youki;
            $saikou = $kikaicount;
        }
        $kikaicount++;
        $i++;
    }
    echo "{$saikou}\n";
?>
