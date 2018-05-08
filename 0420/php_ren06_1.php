<?php
session_start();
$_SESSION['name'] = "横浜西口校";
?>
<form action="php_ren06_2.php" method="post">
<p>ユーザ名</p>
<p><input type="text" name="user_name" value=""></p>
<p><input type="submit" value="送信する" /></p>
</form>