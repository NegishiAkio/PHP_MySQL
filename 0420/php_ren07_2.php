<h1>アンケート</h1>
<p>以下の内容で送信してよろしいですか？</p>
<form action="php_ren07_3.php" method="post">
<?php
session_start();
$_SESSION['myname'] = $_POST['myname'];
$_SESSION['human'] = $_POST['human'];

print("名前:" . htmlspecialchars($_POST['myname']));
print("<br>");
print("性別:" . htmlspecialchars($_POST['human']));


?>
<br>
<input type="submit" value="送信" />

<?php
print("<br>");
print('<a href="php_ren07_1.php">前の画面に戻る</a>');
?>
</form>