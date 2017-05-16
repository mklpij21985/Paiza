<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $hu = explode(" ", $input_lines);

    if($hu[1] == "M")
    {
        echo "Hi, Mr. {$hu[0]}";
    }
    else
    {
        echo "Hi, Ms. {$hu[0]}";
    }

?>
