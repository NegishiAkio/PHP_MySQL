<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<table border="1" style="text-align:center;">
	<tr>
	<th>商品名</th>
	<th>価格</th>
	<th>イメージ</th>
	</tr>

<?php
$db = mysqli_connect('localhost','root','','mydb') or mysqli_connect_errno();
mysqli_set_charset($db, 'utf8');

$recordSet = mysqli_query($db, 'select * from product');



while($product = mysqli_fetch_assoc($recordSet)){


?>
<tr>
<td><?php echo htmlspecialchars($product['s_name'])?></td>
<td><?php echo htmlspecialchars(number_format($product['s_price']))?></td>
<td><img src="../ren11/image/<?php print($product['s_image']);?>" width="100px" height="100px" alt="データベース"></td>
</tr>
<?php
}
?>
</table>
</body>
</html>