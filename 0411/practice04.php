<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php
print("名前:" . htmlspecialchars($_GET['my_name'], ENT_QUOTES));
print("メッセージ:" . htmlspecialchars($_GET['message'], ENT_QUOTES));

?>
</body>
</html>