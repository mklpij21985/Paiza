<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);

    if($input_lines >= 0 && $input_lines <= 30)
    {
        echo "sunny";
    }elseif ($input_lines >= 31 && $input_lines <= 70)
    {
        echo "cloudy";
    }elseif($input_lines >= 71)
    {
        echo "rainy";
    }

?>
