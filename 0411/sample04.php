<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php

print("名前:" . htmlspecialchars($_REQUEST['name'],ENT_QUOTES));


?>
</body>
</html>