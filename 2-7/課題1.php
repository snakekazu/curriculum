<?php
$countries = ["America", "Japan", "China", "Korea"];

//0番目はAmerica
echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
echo "<br>";
var_dump($countries);

echo "<br>";
$fruits =["りんご","みかん","ぶどう"];
//0番目のりんごを出力
echo $fruits[0];
echo "<br>";
//1番目のみかんを出力
echo $fruits[1];
echo "<br>";
//2番目のぶどうを出力
echo $fruits[2];
echo "<br>";
var_dump($fruits);

echo "<br>";
$fruits =["apple"=>"りんご","orange"=>"みかん","grape"=>"ぶどう"];
//りんごを出力
echo $fruits["apple"];
//みかんを出力
echo $fruits["orange"];
echo $fruits["grape"];
echo "<br>";
$fruits=["りんご","みかん","ぶどう"];
$fruits[] = "もも";
echo $fruits[0];
echo $fruits[1];
echo $fruits[2];
echo $fruits[3];
echo "<br>";
var_dump($fruits);
echo "<br>";
$fruits =["apple"=>"りんご","orange"=>"みかん","grape"=>"ぶどう"];
$fruits ["peach"] ="もも";
//りんごを出力
echo $fruits["apple"];
echo $fruits["peach"];
echo "<br>";
var_dump($fruits);
echo "<br>";
?>




<?php
//ここから課題
$color=["red"=>"赤","blue"=>"青","green"=>"緑"];
echo $color["red"];
echo $color["blue"];
echo $color["green"];
echo "<br>";
var_dump($color);
echo "<br>";
?>
<?php
$color=["red"=>"赤","blue"=>"青","green"=>"緑"];
$color["yellow"]="黄色";
echo $color["red"];
echo $color["blue"];
echo $color["green"];
echo $color["yellow"];
echo "<br>";
var_dump($color);
?>