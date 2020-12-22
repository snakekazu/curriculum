<?php
//count
$freind=["kondo","goto","kageyama"];
echo count($freind);
echo "<br>";
//sort
$freind=["kondo","goto","kageyama","hori"];
sort($freind);
var_dump($freind);
echo "<br>";
$number=[5,4,3,2,1];
sort($number);
var_dump($number);
echo "<br>";
//in_array
$freinds=["kondo","goto","kageyama","hori"];
var_dump(in_array("kondo",$freinds));
echo "<br>";
$friend=["kondo","goto","kageyama","hori"];
if(in_array("kondo",$friend)){
  echo "近藤さんは友達";
}else{
  echo "近藤さんは宇宙人";
}
echo "<br>";
//implode
$friends=["kondo","goto","kageyama","hori"];
$sbc=implode("@",$friends);
var_dump($sbc);
echo "<br>";
//explode
$number="6,7,8,9";
$str= explode(",",$number);
var_dump($str);
?>