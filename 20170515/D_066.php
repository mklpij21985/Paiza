<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $sta = explode(" ", $input_lines);
    $a =0;
    $a = $sta[1] - $sta[0];
    if($a >= 0 && $sta[0] >= 1 && $sta[0] <= 20 )
    {

        echo "{$a}";

    }
    else
    {
        echo "NO";
    }

?>
