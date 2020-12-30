<?php
$num =0;
$i =0;
while($num <40){
  $i ++;
  $dice =rand(1,6);
  echo $i. '回目=' .$dice;
  $num += $dice;
  echo "<br>";
}
echo '合計'.$i.'回でゴール';
?>

<br>
<br>
<?php
date_default_timezone_set('Asia/Tokyo');
$time =date('G');
if(5<=$time && $time<11){
  echo '今'.$time. '時台です。おはようございます';
}elseif(12<=$time && $time<=17){
  echo '今'.$time.'時台です。こんにちは';
}else{
  echo '今'.$time.'時台です。こんばんは';
}
?>
<br>
