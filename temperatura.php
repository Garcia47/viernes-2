<?php



if ($_POST) { 

    $can=$_POST['can'];
    $uni=$_POST['uni'];
    
    if ($uni==1){
        $fah=$can*1.8+32;
        $kel=$can+273.15;

        echo "<h2>Fahrenheir ".round($fah,2)."</h2>";
        echo "<h2>Kelvin ".round($kel,2)."</h2>";
       
    }
 
    if ($uni==1){
        $cel=($can-32)*5/9;
        $kel=($can-32)*5/9+273.15;

        echo "<h2>Celcios ".round($cel,2)."</h2>";
        echo "<h2>Kelvin ".round($kel,2)."</h2>";
       
    }

   
}


?>