<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $kami = trim(fgets(STDIN));
    $nokori = trim(fgets(STDIN));

    $a = floor($nokori / $kami);
    $b = $nokori % $kami;

    if($b != 0)
    {
        $a++;
    }

    echo "{$a}";
?>
