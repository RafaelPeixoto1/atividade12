<?php
function ParImpar($num){
   if($num%2==0){
       return true;
   }
   else{
       
   }
       return false;
}
$num=rand(1,10000);
if (ParImpar($num)){
    echo $num. 'é par';
}
else{
    echo $num. 'é impar';
}

