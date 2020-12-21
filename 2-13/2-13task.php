<?php
//課題例題
//ceil
$ceil="7.2";
echo ceil($ceil);
echo "<br>";

//floor
$floor=9.7;
echo floor($floor);
echo "<br>";

//round
$round=6.6;
echo round($round);
echo "<br>";

//pi
echo pi();
echo "<br>";
function circle($x) {
  $circle_area=$x*$x*pi();
  echo  $circle_area;
}
//半径が４の場合
circle(4);
echo "<br>";

//mt_rand
echo mt_rand(1,50);
echo "<br>";

//strlen
$str="goodmornig";
echo strlen($str);
echo "<br>";

//strpos
$str="kondo";
//0から始まるので２番目
echo strpos($str,"n");
echo "<br>";

$str="kazuhiro";
//zuhiroと表示させる
echo substr($str,-6,6);
echo "<br>";

//str_replace
$str="kazuhiro";
echo str_replace("kazu","KAzu",$str);
echo "<br>";

$str="Good morning";
echo str_replace(" ", "",$str);
echo "<br>";

//printf
$name="kazu";
$number="50";
printf("%sは昨日%d分遅刻した",$name,$number);
echo "<br>";

$name="zuhiro";
$number="60";
$num="40";
printf("%sは昨日%d分遅刻して先生に%d分怒られた",$name,$number,$num);

echo "<br>";
$number=3;
$num=1;
printf("テスト時間は残り%02d時間%02d分です",$number,$num);
echo "<br>";

$number=2;
$num=4;
$limit=sprintf("テスト時間は残り%02d時間%02d分です",$number,$num);
echo $limit;


?>