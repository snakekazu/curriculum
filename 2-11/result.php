<?php
$my_name = $_GET['my_name'];
$password = $_GET['password'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<br>

<?php
$my_name= $_GET["my_name"];
$e_mail= $_GET["e_mail"];
$password=$_GET["password"];
var_dump($_GET);
?>
<p>名前は<?php echo $my_name; ?></p>
<p>メールアドレスは<?php echo $e_mail; ?></p>
<p>パスワードは<?php echo $password;?></p>


