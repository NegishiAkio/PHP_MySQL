<?php
$num1 = rand(0,100);
$num2 = rand(0,100);

if($num1 < $num2){
    print($num1 . "<" . $num2);
}elseif($num1 > $num2){
    print($num1 . ">" . $num2);
}else{
    print($num1 . "=" . $num2);

}
?>