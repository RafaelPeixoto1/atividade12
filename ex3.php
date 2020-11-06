<?php
function percentagem($rapazes,$raparigas){
   $soma=$raparigas+$rapazes;
    $nrapazes=($rapazes/$soma)*100;
        echo"A percentagem de rapazes é " .$nrapazes;
    echo "<br>";
    $nraparigas=($raparigas/$soma)*100;
        echo"A percentagem de raparigas é " .$nraparigas;
}
$rapazes=rand(1,30);
$raparigas=rand(1,30);
percentagem($raparigas,$rapazes);
$soma=0;
?>