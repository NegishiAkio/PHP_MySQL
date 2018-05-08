<!DOCTYPE html>
<html>
<head>
	<!--link rel="stylesheet" type="text/css" href="style.css"-->
	<meta charset="UTF-8" />
	<!-- ページタイトル -->
	<title>タイトル</title>
</head>
<body>
	<!-- ここにプログラムを記述します -->
<?php
$db = mysqli_connect('localhost','root','','mydb') or die(mysqli_connect_error());
//echo "データベースに接続しました";

mysqli_set_charset($db,'utf8');
/*
mysqli_query($db,'insert into my_items values("",1,"もも",200,"缶詰,ピンク,甘い",0,
"2010-08-01","2010-08-01")') or die(mysql_error());

//echo "データを挿入しました";
*/
$recordSet = mysqli_query($db, 'SELECT * FROM my_items');

$data = mysqli_fetch_assoc($recordSet);
while($data){
echo $data['item_name'];
echo "<br>";
$data = mysqli_fetch_assoc($recordSet);
}
?>
</body>
</html>
