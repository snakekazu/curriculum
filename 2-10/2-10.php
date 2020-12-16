<?php
//直方体の体積を求める関数
//base:縦、height:高さ、width:横
function tyokuhoutai($base,$height,$width){
    //$areaは体積
    $area=$base*$height*$width;
    print "直方体の面積は".$area; 
} 
tyokuhoutai(5,10,8);


?>