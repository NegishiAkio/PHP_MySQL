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
	<table border="1">
	<tr>
	<th>maker_id</th>
	<th>item_name</th>
	<th>price</th>
	</tr>
<?php
$db = mysqli_connect('localhost','root','','mydb') or die(mysqli_connect_error());
//echo "データベースに接続しました";

mysqli_set_charset($db,'utf8');

$recordSet = mysqli_query($db, 'SELECT * FROM my_items');

while($data = mysqli_fetch_assoc($recordSet)){

?>
<tr>
<td><?php echo htmlspecialchars($data['id'])?></td>
<td><?php echo htmlspecialchars($data['item_name'])?></td>
<td><?php echo htmlspecialchars($data['price'])?></td>
</tr>

<?php
}

?>


</table>
</body>
</html>