<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $a = explode(" ", $input_lines);
    $al = "A";
    $z = 0;
    $x = 0;
    $c = 0;

    while($a[0] > $z)
    {
        echo "{$al}";
        $z++;
        $al++;
    }
    echo "\n";
    while($a[1] > $x)
    {
        echo "{$al}";
        $x++;
        $al++;
    }
    echo "\n";
    while($a[2] > $c)
    {
        echo "{$al}";
        $c++;
        $al++;
    }


?>
