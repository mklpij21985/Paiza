<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $pointo_kingaku = 0;
    $point_huyo = 0;

    while($i < $input_lines)
    {
        $point = trim(fgets(STDIN));
        $syurui_point = explode(" ", $point);

        //0:食品　1:書籍　2:衣類　3:その他
        //100円ごとに0:食品は5ポイント　1:書籍は3ポイント　2:衣類は2ポイント　3:その他は1ポイント
        //購入金額の100円未満は切り捨てる

        if($syurui_point[0] == 0)
        {
            $syokuhin += $syurui_point[1];
        }
        elseif($syurui_point[0] == 1)
        {
            $syoseki += $syurui_point[1];
        }
        elseif($syurui_point[0] == 2)
        {
            $irui += $syurui_point[1];
        }
        elseif($syurui_point[0] == 3)
        {
            $etc += $syurui_point[1];
        }

        $i++;
    }
    $point_huyo += floor($syokuhin / 100) * 5;
    $point_huyo += floor($syoseki / 100) * 3;
    $point_huyo += floor($irui / 100) * 2;
    $point_huyo += floor($etc / 100) * 1;

    echo "{$point_huyo}\n";
?>
