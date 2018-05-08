<?php
/*
$db = mysqli_connect('localhost','root','','mydb') or die(mysqli_connect_error());

mysqli_set_charset($db, 'utf8');
*/
require('dbconnect.php');

//データベースにデータを挿入するプログラム
$sql = sprintf("INSERT INTO my_items VALUES('', '%d','%s','%d','%s','','','','')",

mysqli_real_escape_string($db, $_POST['maker_id']),
mysqli_real_escape_string($db, $_POST['item_name']),
mysqli_real_escape_string($db, $_POST['price']),
mysqli_real_escape_string($db, $_POST['keyword'])
);
mysqli_query($db, $sql) or die(mysqli_error($db));
?>
<p>会員登録完了しました</p>
<?php

?>
