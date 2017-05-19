<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    //1回戦
    $input_lines1 = trim(fgets(STDIN));
    //1回戦　グループ2
    $time = trim(fgets(STDIN));
    $time1 = trim(fgets(STDIN));

    $s = explode(" ", $input_lines);
    $s1 = explode(" ", $input_lines1);
    $t = explode(" ", $time);
    $t1 = explode(" ", $time1);



    $w = $s[0] - 1;
    $x = $s[1] - 1;
    $y = $s1[0] - 1;
    $z = $s1[1] - 1;


    if($t[$w] > $t[$x])
    {
        $k = $s[1];
    }
    else
    {
        $k = $s[0];
    }
    if($t[$y] > $t[$z])
    {
        $k1 = $s1[1];
    }
    else
    {
        $k1 = $s1[0];
    }

if($k < $k1)
{
    if($t1[0] < $t1[1])
    {
        $win1 = $k;
        $win2 = $k1;
    }
    else
    {
        $win1 = $k1;
        $win2 = $k;
    }
}
else
{
    if($t1[0] < $t1[1])
    {
        $win1 = $k1;
        $win2 = $k;
    }
    else
    {
        $win1 = $k;
        $win2 = $k1;
    }
    echo "{$win1}\n{$win2}";
}
?>
