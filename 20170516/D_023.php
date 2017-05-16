<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $moji = strlen($input_lines);

    $i = 0;
    $b = 0;

    while($moji > $i)
    {
        if($input_lines[$i] == "A")
        {
            $b++;
        }
        $i++;
    }
    echo "{$b}";
?>
