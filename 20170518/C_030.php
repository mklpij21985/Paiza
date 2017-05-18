<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $size = explode(" ", $input_lines);
    $i = 0;
    $j = 0;
    $space = $size[1] - 1;
    while($i < $size[0])
    {
        $gazou = trim(fgets(STDIN));
        $gazou_hani = explode(" ", $gazou);

        while($j < $size[1])
        {
            if($space > $j)
            {
                if($gazou_hani[$j] < 128)
                    {
                        //128未満黒
                        echo "0 ";
                    }
                elseif ($gazou_hani[$j] > 127)
                    {
                        //128以上白
                        echo "1 ";
                    }
            }
            elseif($space == $j)
            {
                if($gazou_hani[$j] < 128)
                    {
                        //128未満黒
                        echo "0";
                    }
                elseif ($gazou_hani[$j] > 127)
                    {
                        //128以上白
                        echo "1";
                    }
            }
            $j++;
        }
        $j = 0;
        echo "\n";
        $i++;
    }

?>
