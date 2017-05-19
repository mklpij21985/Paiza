<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = trim(fgets(STDIN));
    $i = 0;
    $j = 0;
    $hantei = 0;
    $tokuten = 0;
    while($i < $input_lines)
    {
        $moji = trim(fgets(STDIN));
        $seikai_ans[$i] = explode(" ", $moji);

        $len_seikai = strlen($seikai_ans[$i][0]);
        $len_ans = strlen($seikai_ans[$i][1]);
        $seikai_sp = str_split($seikai_ans[$i][0]);
        $ans_sp = str_split($seikai_ans[$i][1]);

        $hantei2 = $len_seikai - 1;
        if($len_seikai == $len_ans)
        {

            while($len_ans > $j)
            {
                if($seikai_sp[$j] == $ans_sp[$j])
                {
                    $hantei++;
                }
                $j++;
            }
            if($len_seikai == $hantei)
            {
                $tokuten +=2;
            }

            if ($hantei == $hantei2)
            {
                $tokuten +=1;
            }


        }

        $j = 0;
        $hantei = 0;
        $i++;
    }
 echo "{$tokuten}";
?>
