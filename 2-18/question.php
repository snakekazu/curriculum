<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>question</title>
  <link rel ="stylesheet" type ="text/css" href ="style2.css">
</head>
<body>
  
</body>
</html>
<div class= "header-question">
<?php 
$name =$_POST['name'];
echo 'お疲れ様です' .$name."さん";?>
</div>
<div class="question">
<?php
 $question=array("80","22","20","21");
 $answer =$question[0];

?>

<h2>ネットワークのポート番号は何番？</h2>
<form method = "POST" action ="answer.php" >
<?php foreach($question as $value){?>
   <input type="radio" name="question" value="<?php echo $value; ?>" /> <?php echo $value; ?>
   <?php } ?>
   <input type="hidden" name="answer" value="<?php echo $answer ?>">

</div>
<div class ="question2">
<?php
$question2 =array("PHP","Python","JAVA", "HTML");
$answer2 =$question2[0];
?>
<h2>②Webページを作成するための言語は？</h2>

  <?php foreach($question2 as $value2){?>
    <input type ="radio" name = "question2" value="<?php echo $value2; ?>"/><?php echo $value2; ?>
    <?php } ?>
    <input type ="hidden" name ="answer2" value ="<?php echo $answer2 ?>">

  </div>
  <div class ="question3">
<?php
$question3 =array("join","select","insert","update");
$answer3 =$question3[2];
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php foreach($question3 as $value3){?>
<input type ="radio" name = "question3" value = "<?php echo $value3; ?>" /><?php echo $value3;?>
<input type ="hidden" name ="answer3" value ="<?php echo $answer3 ?>">
<?php } ?>
</div>
<input type ="hidden" name ="name" value ="<?php echo $name; ?>">
<div class ="submit">
<input type ="submit" value ="回答する">
</form>
</div>
<div class ="footer"></div>

 