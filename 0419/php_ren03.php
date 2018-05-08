<?php
$sum = 0;
for($i=1; $i<11; $i++){
    if($i < 10){
        print($i . "+");
        $sum += $i;
    }else{
        $sum +=$i;
        print($i . "=" . $sum);
    }
}
?>