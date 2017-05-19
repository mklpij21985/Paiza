<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);
    $i = 0;
    $j = 0;
    $k = 0;
    $l = 0;

    while($i < $input_lines)
    {
        //$coun_time[$i][0]国名　$coun_time[$i][1]標準時からの時差
        $coun = trim(fgets(STDIN));
        $coun_time[$i] = explode(" ", $coun);
        //echo "{$coun_time[$i][1]}\n";

        $i++;
    }

    $mycoun = trim(fgets(STDIN));
    //$mycoun_jikoku 自分の国と現在時刻をスペースで区切る
    $mycoun_jikoku = explode(" ", $mycoun);
    //$ho_min自分の国の現在時刻を:で区切る
    $ho_min = explode(":", $mycoun_jikoku[1]);

   while($j < $input_lines)
   {
       if($coun_time[$j][0] == $mycoun_jikoku[0])
       {
       $jisamoto =  $coun_time[$j][1];
      // echo "{$jisamoto}\n";
       }
       $j++;
   }

   while($k < $input_lines)
   {
       //$jisa自分の国との時差
       $jisa[$k] = $coun_time[$k][1] - $jisamoto;
       //echo "{$jisa[$k]}\n";
       $k++;
   }

   while($l < $input_lines)
   {

       $jisa_jikan = $ho_min[0] + $jisa[$l];
       if($jisa_jikan > 23)
       {
           $jisa_jikan = $jisa_jikan - 24;
       }
       elseif($jisa_jikan < 0)
       {
           $jisa_jikan = $jisa_jikan + 24;
       }
       echo str_pad("{$jisa_jikan}", 2, 0, STR_PAD_LEFT);
       echo ":{$ho_min[1]}\n";

       $l++;
   }
?>
