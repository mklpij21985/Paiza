<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $kagen = explode(" ", $input_lines);
    $ans = 0;



    if($kagen[1] == "+")
    {
        if($kagen[0] == "x")
        {
            $ans = abs($kagen[4] - $kagen[2]);
        }
        elseif($kagen[2] == "x")
        {
            $ans = abs($kagen[4] - $kagen[0]);
        }
        elseif($kagen[4] == "x")
        {
            $ans = abs($kagen[0] + $kagen[2]);
        }

    }
    if($kagen[1] == "-")
    {
        if($kagen[0] == "x")
        {
            $ans = abs($kagen[4] + $kagen[2]);
        }
        elseif($kagen[2] == "x")
        {
            $ans = abs($kagen[4] + $kagen[0]);
        }
        elseif($kagen[4] == "x")
        {
            $ans = abs($kagen[0] - $kagen[2]);
        }
    }

    echo "{$ans}";
?>
