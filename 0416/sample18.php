<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
session_start();
if(isset($_POST['my_id'])){
    $_SESSION['my_id'] = $_POST['my_id'];
}
?>

<p>ようこそ<?php echo htmlspecialchars($_SESSION['my_id']); ?>さん</p>
<p><a href="./sample18_logout.php">ログアウトする</a></p>
</body>
</html>