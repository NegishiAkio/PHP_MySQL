<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<table border="1" style="text-align:center;">
<tr>

<th>diskno</th>
<th>タイトルo</th>
<th>アーティスト</th>
<th>価格</th>
<th>画像</th>
</tr>
<form action="php_ren12_insert.php" method="post">
<a href="php_ren12_insert.php">登録</a></br>
<input type="text" name="search" id="search" value="" />

<input type="submit" value="アーティスト検索" />
</form>
<?php
$db = mysqli_connect('localhost','root','','ren12db') or mysqli_connect_errno();
mysqli_set_charset($db, 'utf8');

$recordSet = mysqli_query($db, 'select * from cd');

while($table = mysqli_fetch_assoc($recordSet)){
?>


<tr>
<td><?php echo htmlspecialchars($table['diskno'])?></td>
<td><?php echo htmlspecialchars($table['title'])?></td>
<td><?php echo htmlspecialchars($table['artist'])?></td>
<td><?php echo htmlspecialchars($table['price'])?></td>
<td><img src="../ren12/image/<?php print($table['imagefile']);?>" width="100px" height="100px" alt="データベース"></td>

</tr>
<?php
}
?>
</table>
</body>
</html>