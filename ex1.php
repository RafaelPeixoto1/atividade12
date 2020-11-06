<?php
   define('PI',3.14);
    $R=rand(1,100);
    $area;
 function area($R){
     $area=$R*$R*PI;
 return $area;
 }
echo "A area da circunferencia com raio".$R."é".area($R);
?>