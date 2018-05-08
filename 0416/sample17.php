<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
$myId = $_POST['my_id'];
$password = $_POST['password'];
$save = $_POST['save'];

if($save == 'on'){
setcookie('my_id', $myId , time() + 60 * 60 * 24 * 14);
setcookie('password', $password , time() + 60 * 60 * 24 * 14);
$message = "ログイン情報を記録しました";
}else{
    setcookie('my_id',"");
    $message = "記録しませんでした";
}
?>
<p><?php echo $message; ?></p>
<p>ID;<?php echo $myId; ?></p>
<p>パスワード;<?php echo $password; ?></p>
<p><a href="sample17_input.php"></a></p>
</body>
</html>