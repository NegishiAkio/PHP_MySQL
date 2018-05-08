<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- ページタイトル -->
	<title>index.php</title>
</head>
<body>
<?php
/*
$db = mysqli_connect('localhost','root','','mydb') or mysqli_connect_errno();
mysqli_set_charset($db, 'utf8');

$recordSet = mysqli_query($db, 'select * from my_items order by id desc');
*/

require('dbconnect.php');
?>

<div id="wrap">
<div id="head">
<h1>商品管理</h1>
</div>

<div id="content">
	<table width="100%">
<tr>
<th scope="col">ID</th>
<th scope="col">メーカー</th>
<th scope="col">商品名</th>
<th scope="col">価格</th>
</tr>


<?php
while($table=mysqli_fetch_assoc($recordSet)){
print('<tr>');
print('<td>' . $table['id'] . '</td>');
print('<td>' . $table['maker_id'] . '</td>');
print('<td>' . $table['item_name'] . '</td>');
print('<td>' . $table['price'] . '</td>');
print('</tr>');

}
?>
	</table>
</div>
</div>
</body>
</html>
