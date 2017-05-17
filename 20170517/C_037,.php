<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $nitiji = explode(" ", $input_lines);
    $hiniti = explode("/", $nitiji[0]);
    $jikan = explode(":", $nitiji[1]);




    if($jikan[0] > 23)
    {
        $jikan[0] = $jikan[0] - 24;
    }

        if($hiniti[1])
    {
        $hiniti[1] = $hiniti[1] + 1;
    }

    if($jikan[0] > 9)
    {
        echo "{$hiniti[0]}/{$hiniti[1]} {$jikan[0]}:{$jikan[1]}";
    }
    else
    {
        echo "{$hiniti[0]}/{$hiniti[1]} 0{$jikan[0]}:{$jikan[1]}";
    }

?>
