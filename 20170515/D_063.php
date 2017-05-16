<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $input_lines2 = trim(fgets(STDIN));
    $jun = explode(" ", $input_lines);
    $me = 1;

    for($i = 0; $i < 5; $i++)
    {
        if($input_lines2 > $jun[$i])
       {
        $me++;
       }
    }
    echo "{$me}";

?>
