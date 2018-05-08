<form action="php_ren04_2.php" method="post">
<?php
for($i=0; $i<6; $i++){
print("<br>");
print($i . '<input type="checkbox" name="check[]" id="check" value="'. $i . '" /> ');

}
?>
<br>
<input type="submit" value="送信する">
</form>