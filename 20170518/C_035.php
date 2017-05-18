<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $i = 0;
    $j = 0;
    $ban = 1;
    $goukaku = 0;
    $goukei = 0;

    while($i < $input_lines)
    {
        $tensu = trim(fgets(STDIN));
        $gakka_tensu = explode(" ", $tensu);

        while($j < 5)
        {
            $goukei = $goukei + $gakka_tensu[$ban];
            $ban++;
            $j++;
        }

        if($goukei >= 350 && $gakka_tensu[0] == "l")
        {

            $bunkei_goukei = $gakka_tensu[4] + $gakka_tensu[5];

            if($bunkei_goukei >= 160)
            {
                $goukaku++;
            }

        }
        if ($goukei >= 350 && $gakka_tensu[0] == "s")
        {
            $rikei_goukei = $gakka_tensu[2] + $gakka_tensu[3];
                if($rikei_goukei >= 160)
                {
                    $goukaku++;
                }
        }
        $j = 0;
        $ban = 1;
        $goukei = 0;
        $i++;
    }
    echo "{$goukaku}";
?>
