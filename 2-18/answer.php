<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>答え</title>
  <link rel ="stylesheet" type ="text/css" href ="style3.css">
</head>

<body>
<?php
//answer.php
$question = $_POST['question']; //ラジオボタンの内容を受け取る
$answer = $_POST['answer'];   //hiddenで送られた正解を受け取る

//結果の判定
if($question ==$answer){
	$result = "正解！";
}else{
	$result = "不正解･･･";
}
?>
<?php

$question2 = $_POST['question2'];
$answer2 = $_POST['answer2'];
if($question2 ==$answer2){
  $result2 = "正解！";
}else{
  $result2 ="不正解･･･";
}
?>
<?php
$question3 = $_POST['question3'];
$answer3 = $_POST['answer3'];
if($question3 ==$answer3){
  $result3 = "正解！";
}else{
  $result3 ="不正解･･･";
}
?>
<?php 
//名前を受け取る
$name =$_POST["name"];


?>
 
<div class ="main">
<?php echo $name.'さんの結果は・・?';?>
<P>①の答えは</P>
<?php echo $result ?>
<p>②の答えは</p>
<?php echo $result2 ?>
<p>③の答えは</p>
<?php echo $result3 ?>
</div>
</body>
</html>