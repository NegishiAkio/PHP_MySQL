<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
if(isset($_COOKIE['my_id'])){
    $myId = $_COOKIE['my_id'];
}else{
    $myId = "";
  }
?>
<?php
if(isset($_COOKIE['password'])){
    $password = $_COOKIE['password'];
}else{
    $password = "";
}
?>
<form action="sample17.php" method="post">
<dl>
<dt>ID</dt>
<dd><input type="text" name="my_id" id="my_id" value="<?php
echo $myId; ?>" /></dd>

<dt>パスワード</dt>
<dd><input type="password" name="password" id="password" value="<?php echo $password; ?>"/></dd>
<dt>IDの保存</dt>
</dl>
<p><input type="checkbox" name="save" id="save" value="on" /><label for="save">IDを保存する</label></p>
<input type="submit" value="送信する" />
</form>
</body>
</html>