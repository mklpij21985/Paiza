<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = 0;
    $a = 0;
if($input_lines = 0)
{
    echo "OFF";
}

    if($input_lines >= 1 && $input_lines <= 100)
    {
        $a = $input_lines % 2;
        if($a = 0)
        {
            echo "off" ;
        }elseif($a = 1)
        {
            echo "ON" . "<br>";
        }
    }

?>
