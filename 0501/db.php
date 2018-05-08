<table bor>
<tr>
	<th>商品名</th>
	<th>価格</th>
	<th>イメージ</th>
</tr>


<?php
$db = mysqli_connect('localhost','root','','mydb') or mysqli_connect_errno();
mysqli_set_charset($db, 'utf8');

$recordSet = mysqli_query($db, 'select * from product');


?>

<?php
while($table = mysqli_fetch_assoc($recordSet)){
echo '<tr>';
echo '<td>' . htmlspecialchars($table['s_name']) . '</td>';
echo '<td>' . htmlspecialchars($table['s_price']) . '</td>';
echo '<td>' . htmlspecialchars($table['s_image']) . '</td>';
echo '</tr>';
}
?>
<?php

?>

</table>