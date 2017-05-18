<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $renkyu_nissyu = explode(" ", $input_lines);

    $firstday = trim(fgets(STDIN));
    $firstday_par = explode(" ", $firstday);

    //$renkyu_startは連休の最初の日 $renkyu_lastは連休の最終日
    $renkyu_start = $firstday_par[0];
    $renkyu_last = $renkyu_start + $renkyu_nissyu[0] - 1;


    if($renkyu_last )
?>
