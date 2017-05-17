<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $nen = explode(" ", $input_lines);
    $a = 0;
    $b = 0;

    if($nen[0] >= $nen[1])
    {
        $a = $nen[0] - $nen[1];
        echo "{$a}";
    }
    else
    {
        $b = $nen[1] - $nen[0];
        echo "{$b}";
    }
?>
