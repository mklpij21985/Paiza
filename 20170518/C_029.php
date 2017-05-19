<?php
//コメントのechoは値が取得されているかの確認用

    $input_lines = trim(fgets(STDIN));
    $renkyu_nissyu = explode(" ", $input_lines);
    $i = 0;
    $j = 0;
    $k = 0;
    $l = 0;
    $m = 0;
    $avg_sam = 0;
    $avgold = 999;
    $saikou = 0;
    //日付と降水確率の取得
    while($renkyu_nissyu[0] > $i)
    {
        //$day[i][0]番地に日付を格納
        //$day[i][1]番地に日付に対応した降水確率を格納
        $day[$i] = trim(fgets(STDIN));
        $day[$i] = explode(" ", $day[$i]);
        //echo "{$day[$i][0]} or ";
        //echo "{$day[$i][1]}\n";
        $i++;
    }

    $firstday = trim(fgets(STDIN));
    $firstday_par = explode(" ", $firstday);

    //$renkyu_startは連休の最初の日 $renkyu_lastは連休の最終日
    $renkyu_start = $day[0][0];
    $renkyu_last = $renkyu_start + $renkyu_nissyu[0] - 1;
    //echo "{$renkyu_start}\n";
    //echo "{$renkyu_last}";

    //$jに旅行に行く日数分、連休の初日を含めて加算した値
    //たとえば3日旅行に行く場合、初日が19日だった場合21が格納される
    $j = $renkyu_start + $renkyu_nissyu[1] - 1;

while($renkyu_last >= $j)
{
    $l = $m;
    //echo "{$j}\n";
    while($renkyu_nissyu[1] > $k)
        {
        //$avg_sam[$l]に旅行日数ずつの降水確率合計を格納
        //$avg_sam[0]に連休初日から旅行日数分、$avg_sam[1]に連休2日目から

        $avg_sam = $avg_sam + $day[$l][1];
        //echo "{$avg_sam}\n";
        $l++;
        $k++;
        }
    //$avg[$l]に降水確率の平均を格納
    $avg[$m] = floor($avg_sam / $renkyu_nissyu[1]);
    //echo "{$avg[$m]}\n";
    $j++;
    $k = 0;
    $m++;
    $avg_sam = 0;
}

for($s = 0; $s < count($avg); $s++)
{
    if($avg[$s] < $avgold)
    {
        $saikou = $day[$s][0];
        $avgold = $avg[$s];
    }
}
$kikan = $saikou + $renkyu_nissyu[1] - 1;
echo "{$saikou} {$kikan}";
?>
